<?php
// ini_set("memory_limit", "256M");
// koneksi ke database
// $conn = mysqli_connect("localhost", "id10749261_pertumbuhan", "pertumbuhan", "id10749261_pertumbuhan");
$conn = mysqli_connect("localhost", "root", "", "pertumbuhan-balitnak");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function row($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    return $row;
}


function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $img = 'default.jpg';
    $role_id = '2';
    $tgl_buat = time();

    // cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('email sudah terdaftar!')
		      </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES(
        '',
        '$nama',
        '$email',
        '$password',
        '$img',
        '$tgl_buat',
        '$role_id')");

    return mysqli_affected_rows($conn);
}






function login()
{
    global $conn;

    $email = strtolower(stripslashes($_POST["email"]));
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            if ($row['role_id'] == 1) {
                $_SESSION["email"] = $row['email'];
                $_SESSION["role_id"] = "admin";
                $_SESSION['pesan'] = "Selamat Datang";
                echo "<script>
                    alert('Selamat datang admin!');
                    document.location.href = 'admin/index.php?menu=dashboard';
                </script>";
            } elseif ($row['role_id'] == 2) {
                $_SESSION["email"] = $row['email'];
                $_SESSION["role_id"] = "peneliti";
                $_SESSION['pesan'] = "Selamat Datang";
                echo "<script>
                    alert('Selamat datang peneliti!');
                    document.location.href = 'peneliti/index.php?menu=dashboard';
                </script>";
            }

            return mysqli_affected_rows($conn);
        } else {
            echo "<script>
                    alert('Maaf password yang di inputkan salah!');
                    document.location.href = 'login.php';
                </script>";

            return false;
        }
    } else {
        echo "<script>
                alert('Maaf email / password yang di inputkan salah!');
                document.location.href = 'login.php';
            </script>";

        return false;
    }
}







function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/img/profile/' . $namaFileBaru);

    return $namaFileBaru;
}






// Admin
function ubahAdmin($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = strtolower((htmlspecialchars($data["email"])));
    $passwordBaru = mysqli_real_escape_string($conn, $data["passwordBaru"]);
    $passwordLama = $data["passwordLama"];
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    if (empty($passwordBaru)) {
        $password = $passwordLama;
    } else {
        $passwordNew = $passwordBaru;
        $password = password_hash($passwordNew, PASSWORD_DEFAULT);
    }

    $query = "UPDATE user SET
				nama = '$nama',
				email = '$email',
                password = '$password',
				img = '$gambar'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}





function tambahAdmin($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $img = 'default.jpg';
    $role_id = '1';
    $tgl_buat = time();

    // cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('email sudah terdaftar!')
		      </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES(
        '',
        '$nama',
        '$email',
        '$password',
        '$img',
        '$tgl_buat',
        '$role_id')");

    return mysqli_affected_rows($conn);
}






function hapusAdmin($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id =$id");
    return mysqli_affected_rows($conn);
}







function cariAdmin($keyword)
{
    $query = "SELECT * FROM user
				WHERE
              role_id = '1' AND
			  nama LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' AND
              role_id = '1'
			";
    return query($query);
}

// Akhir Admin









// Awal Peneliti
function ubahPeneliti($data)
{
    global $conn;

    $id = $data["id_peneliti"];
    $nama = htmlspecialchars($data["nama"]);
    $email = strtolower((htmlspecialchars($data["email"])));
    $passwordBaru = mysqli_real_escape_string($conn, $data["passwordBaru"]);
    $passwordLama = $data["passwordLama"];
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    if (empty($passwordBaru)) {
        $password = $passwordLama;
    } else {
        $passwordNew = $passwordBaru;
        $password = password_hash($passwordNew, PASSWORD_DEFAULT);
    }

    $query = "UPDATE user SET
				nama = '$nama',
				email = '$email',
                password = '$password',
				img = '$gambar'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}







function tambahPeneliti($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $img = 'default.jpg';
    $role_id = '2';
    $tgl_buat = time();



    // cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('email sudah terdaftar!')
		      </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES(
        '',
        '$nama',
        '$email',
        '$password',
        '$img',
        '$tgl_buat',
        '$role_id')");


    penelitian();

    return mysqli_affected_rows($conn);
}



function penelitian()
{
    global $conn;
    $emailPen = strtolower(stripslashes($_POST["email"]));
    $penelitian = $_POST["penelitian"];


    $test = mysqli_query($conn, "SELECT id FROM user WHERE email = '$emailPen'");
    $id_email = mysqli_fetch_array($test);


    $looping = count($penelitian);
    for ($i = 0; $i < $looping; $i++) {
        mysqli_query($conn, "INSERT INTO penelitian VALUES(
            '',
            '$penelitian[$i]',
            '$id_email[id][$i]'
        )");
    }
}


function hapusPeneliti($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    mysqli_query($conn, "DELETE FROM penelitian WHERE id_user = $id");
    return mysqli_affected_rows($conn);
}



function cariPeneliti($keyword)
{
    $query = "SELECT * FROM user
				WHERE
              role_id = '2' AND
			  nama LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' AND
              role_id = '2'
			";
    return query($query);
}
// Akhir Peneliti








// Awal Kelinci
function bangsaKelinci($data)
{
    global $conn;
    $bangsa = ucfirst($data['bangsa']);
    $link = strtolower($data['link']);

    mysqli_query($conn, "INSERT INTO jeniskelinci VALUES (
        '',
        '$bangsa',
        '$link'
        )");

    return mysqli_affected_rows($conn);
}

function ubahBangsaKelinci($data)
{
    global $conn;
    $id = $data['id_bangsa'];
    $bangsa = ucfirst($data['bangsa']);
    $link = $data['link'];

    $query = "UPDATE jeniskelinci SET 
                bangsa = '$bangsa',
                link = '$link'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusBangsa($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM jeniskelinci WHERE id = $id");
    return mysqli_affected_rows($conn);
}






function tambahKelinci($data)
{
    global $conn;
    $kodeBetina = strtoupper(stripslashes($data["kodeBetina"]));
    $bangsaBetina = $data['bangsaBetina'];
    $kodeJantan = strtoupper(stripslashes($data["kodeJantan"]));
    $bangsaJantan = $data['bangsaJantan'];
    $ls_lahir = $data['ls_lahir'];
    $tgl_lahir = $data['tgl_lahir'];
    $sex = $data['sex'];
    $f = $data['f'];
    $angkatan = $data['angkatan'];
    $ear_tag = $data['ear_tag'];
    $no_indv = $data['no_indv'];
    $minggu_5 = $data['minggu_5'];
    $minggu_7 = $data['minggu_7'];
    $minggu_9 = $data['minggu_9'];
    $minggu_11 = $data['minggu_11'];
    $minggu_13 = $data['minggu_13'];
    $minggu_15 = $data['minggu_15'];
    $minggu_17 = $data['minggu_17'];
    $minggu_19 = $data['minggu_19'];
    $minggu_21 = $data['minggu_21'];
    $minggu_23 = $data['minggu_23'];
    $ket = $data['ket'];

    $link = strtolower($bangsaBetina);

    $kelinci = "
        '',
        '$kodeBetina',
        '$bangsaBetina',
        '$kodeJantan',
        '$bangsaJantan',
        '$ls_lahir',
        '$tgl_lahir',
        '$sex',
        '$f',
        '$angkatan',
        '$ear_tag',
        '$no_indv',
        '$minggu_5',
        '$minggu_7',
        '$minggu_9',
        '$minggu_11',
        '$minggu_13',
        '$minggu_15',
        '$minggu_17',
        '$minggu_19',
        '$minggu_21',
        '$minggu_23',
        '$ket'
        ";


    mysqli_query($conn, "INSERT INTO kelinci VALUES($kelinci)");
    echo "
			<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php?menu=dataKelinci&jenis=$link';
			</script>
            ";

    return mysqli_affected_rows($conn);
}





function ubahKelinci($data)
{
    global $conn;
    $id = $data['id'];
    $kodeBetina = strtoupper(stripslashes($data["kodeBetina"]));
    $bangsaBetina = $data['bangsaBetina'];
    $kodeJantan = strtoupper(stripslashes($data["kodeJantan"]));
    $bangsaJantan = $data['bangsaJantan'];
    $ls_lahir = $data['ls_lahir'];
    $tgl_lahir = date('Y-m-d', strtotime($data['tgl_lahir']));
    $sex = $data['sex'];
    $f = $data['f'];
    $angkatan = $data['angkatan'];
    $ear_tag = $data['ear_tag'];
    $no_indv = $data['no_indv'];
    $minggu_5 = $data['minggu_5'];
    $minggu_7 = $data['minggu_7'];
    $minggu_9 = $data['minggu_9'];
    $minggu_11 = $data['minggu_11'];
    $minggu_13 = $data['minggu_13'];
    $minggu_15 = $data['minggu_15'];
    $minggu_17 = $data['minggu_17'];
    $minggu_19 = $data['minggu_19'];
    $minggu_21 = $data['minggu_21'];
    $minggu_23 = $data['minggu_23'];
    $ket = $data['ket'];


    $query = "UPDATE kelinci SET
                betina = '$kodeBetina',
                bangsa_betina = '$bangsaBetina',
                jantan = '$kodeJantan',
                bangsa_jantan = '$bangsaJantan',
                ls_lahir = '$ls_lahir',
                tgl_lahir = '$tgl_lahir',
                sex = '$sex',
                f = '$f',
                angkatan = '$angkatan',
                ear_tag = '$ear_tag',
                no_indv = '$no_indv',
                minggu_5 = '$minggu_5',
                minggu_7 ='$minggu_7',
                minggu_9 ='$minggu_9',
                minggu_11 ='$minggu_11',
                minggu_13 ='$minggu_13',
                minggu_15 ='$minggu_15',
                minggu_17 ='$minggu_17',
                minggu_19 ='$minggu_19',
                minggu_21 ='$minggu_21',
                minggu_23 ='$minggu_23',
                ket = '$ket'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}





function hapusKelinci($id, $jenis)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM kelinci WHERE id = $id");
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'index.php?menu=dataKelinci&jenis=$jenis';
    </script>
    ";
    return mysqli_affected_rows($conn);
}



function hapusSemuaDataKelinci()
{
    global $conn;
    $bangsa = $_POST['bersihkanKelinci'];

    mysqli_query($conn, "DELETE FROM kelinci WHERE bangsa_betina = $bangsa");

    echo "
    <script>
        alert('Seluruh data berhasil dihapuskan!');
        document.location.href = 'index.php?menu=dataKelinci&jenis=$bangsa';
    </script>
    ";
    return mysqli_affected_rows($conn);
}






function hapusSemuaDataPerpotongan()
{
    global $conn;

    mysqli_query($conn, "DELETE FROM karkas");

    echo "
    <script>
        alert('Seluruh data berhasil dihapuskan!');
        document.location.href = 'index.php?menu=karkas';
    </script>
    ";
    return mysqli_affected_rows($conn);
}

// Akhir Kelinci








// Awal Karkas
function tambahPerpotongan($data)
{
    global $conn;
    $ternak = $data['ternak'];
    $bangsaKelinci = $data['bangsaKelinci'];
    $noInduk = $data['noInduk'];
    $noJantan = $data['noJantan'];
    $tgl_lahir = $data['tgl_lahir'];
    $tgl_potong = $data['tgl_potong'];
    $perlakuan = $data['perlakuan'];
    $sex = $data['sex'];
    $ket = $data['ket'];
    $potong = $data['potong'];
    $karkas = $data['karkas'];
    $kulit_bulu = $data['kulit_bulu'];
    $hati = $data['hati'];
    $ginjal = $data['ginjal'];
    $kepala_kaki = $data['kepala_kaki'];
    $daging = $data['daging'];
    $tulang = $data['tulang'];


    $query = ("INSERT INTO karkas VALUES(
            '',
            '$ternak',
            '$bangsaKelinci',
            '$noInduk',
            '$noJantan',
            '$tgl_lahir',
            '$tgl_potong',
            '$perlakuan',
            '$sex',
            '$ket',
            '$potong',
            '$karkas',
            '$kulit_bulu',
            '$hati',
            '$ginjal',
            '$kepala_kaki',
            '$daging',
            '$tulang'
            )");

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}







function ubahPerpotongan($data)
{
    global $conn;
    $id = $data['id_karkas'];
    $ternak = $data['ternak'];
    $bangsaKelinci = $data['bangsaKelinci'];
    $noInduk = $data['noInduk'];
    $noJantan = $data['noJantan'];
    $tgl_lahir = date('Y-m-d', strtotime($data['tgl_lahir']));
    $tgl_potong = date('Y-m-d', strtotime($data['tgl_potong']));
    $perlakuan = $data['perlakuan'];
    $sex = $data['sex'];
    $ket = $data['ket'];
    $potong = $data['potong'];
    $karkas = $data['karkas'];
    $kulit_bulu = $data['kulit_bulu'];
    $hati = $data['hati'];
    $ginjal = $data['ginjal'];
    $kepala_kaki = $data['kepala_kaki'];
    $daging = $data['daging'];
    $tulang = $data['tulang'];



    $query = "UPDATE karkas SET
                ternak = '$ternak',
                bangsa = '$bangsaKelinci',
                induk = '$noInduk',
                jantan = '$noJantan',
                tgl_lahir = '$tgl_lahir',
                tgl_potong = '$tgl_potong',
                perlakuan = '$perlakuan',
                sex = '$sex',
                ket = '$ket',
                potong = '$potong',
                karkas = '$karkas',
                kulit_bulu = '$kulit_bulu',
                hati = '$hati',
                ginjal = '$ginjal',
                kepala_kaki = '$kepala_kaki',
                daging = '$daging',
                tulang = '$tulang'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}







function hapusKarkas($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM karkas WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Akhir Karkas
