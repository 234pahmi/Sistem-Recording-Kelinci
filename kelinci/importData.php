<?php
include '../functions.php';
if (isset($_POST['import'])) {
    $bangsa = $_POST['bangsa'];
    if ($bangsa == 'Hyla') {
        $bangsa = "hyla";
    } elseif ($bangsa == 'Hycole') {
        $bangsa = "hycole";
    } elseif ($bangsa == 'NZW') {
        $bangsa = "nzw";
    } elseif ($bangsa == 'Reksi') {
        $bangsa = "reksi";
    } elseif ($bangsa == 'Reza') {
        $bangsa = "reza";
    } elseif ($bangsa == 'Satin') {
        $bangsa = "satin";
    } else {
        echo "  <script>
                    alert('data gagal di import!');
                    document.location.href = '../admin/index.php?menu=dataKelinci';
                </script>";
    }

    $file = basename($_FILES['kelinci']['name']);
    $ekstensi = explode(".", $file);
    $file_name = "file-" . round(microtime(true)) . "." . end($ekstensi);
    $sumber = $_FILES['kelinci']['tmp_name'];
    $target_dir = "_files/";
    $target_file = $target_dir . $file_name;
    move_uploaded_file($sumber, $target_file);

    require_once '../assets/PHPExcel/Classes/PHPExcel.php';
    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

    $sql = "INSERT INTO kelinci VALUES";

    for ($i = 2; $i <= count($all_data); $i++) {

        $noinduk             = $all_data[$i]['B'];
        $betina              = $all_data[$i]['C'];
        $bangsa_betina       = $all_data[$i]['D'];
        $jantan              = $all_data[$i]['E'];
        $bangsa_jantan       = $all_data[$i]['F'];

        $ls_lahir              = $all_data[$i]['G'];
        $tgl_lahir             = date("Y/m/d", strtotime($all_data[$i]['H']));
        $sex                   = $all_data[$i]['I'];
        $ear_tag               = $all_data[$i]['J'];
        $no_indv               = $all_data[$i]['K'];

        $minggu_5                  = $all_data[$i]['L'];
        $minggu_7                  = $all_data[$i]['M'];
        $minggu_9                  = $all_data[$i]['N'];
        $minggu_11                 = $all_data[$i]['O'];
        $minggu_13                 = $all_data[$i]['P'];
        $minggu_15                 = $all_data[$i]['Q'];
        $minggu_17                 = $all_data[$i]['R'];
        $minggu_19                 = $all_data[$i]['S'];
        $minggu_21                 = $all_data[$i]['T'];
        $minggu_23                 = $all_data[$i]['U'];

        $f                         = $all_data[$i]['V'];
        $angka                     = $all_data[$i]['W'];


        $sql .= "('','$betina'
                    ,'$bangsa_betina','$jantan','$bangsa_jantan','$ls_lahir'
                    ,'$tgl_lahir','$sex','$f'
                    ,'$angka','$ear_tag','$no_indv','$minggu_5','$minggu_7','$minggu_9'
                    ,'$minggu_11','$minggu_13','$minggu_15'
                    ,'$minggu_17','$minggu_19','$minggu_21','$minggu_23',''
                   ),";
    }
    $sql = substr($sql, 0, -1);

    // echo $sql;

    mysqli_query($conn, $sql);


    mysqli_query($conn, "DELETE FROM kelinci WHERE betina = ' ' AND jantan=' ' AND bangsa_jantan=' ' AND no_indv=' 'AND ls_lahir=' ' AND sex=' ' AND ear_tag=' ' ");

    unlink($target_file);

    echo "
    <script>
        alert('data berhasil di import!');
        document.location.href = '../admin/index.php?menu=dataKelinci&jenis=$bangsa';
    </script>
";
} elseif (isset($_POST['perpotongan'])) {

    $file = basename($_FILES['perpotongan']['name']);
    $ekstensi = explode(".", $file);
    $file_name = "file-" . round(microtime(true)) . "." . end($ekstensi);
    $sumber = $_FILES['perpotongan']['tmp_name'];
    $target_dir = "_files/";
    $target_file = $target_dir . $file_name;
    move_uploaded_file($sumber, $target_file);

    require_once '../assets/PHPExcel/Classes/PHPExcel.php';
    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

    $sql = "INSERT INTO karkas VALUES";

    for ($i = 2; $i <= count($all_data); $i++) {

        $id             = $all_data[$i]['B'];
        $ternak              = $all_data[$i]['C'];
        $bangsa       = $all_data[$i]['D'];
        $induk              = $all_data[$i]['E'];
        $jantan       = $all_data[$i]['F'];

        $tgl_lahir              = date("Y/m/d", strtotime($all_data[$i]['G']));
        $tgl_potong             = date("Y/m/d", strtotime($all_data[$i]['H']));
        $perlakuan               = $all_data[$i]['I'];
        $sex              = $all_data[$i]['J'];

        $ket                  = $all_data[$i]['K'];
        $potong                  = $all_data[$i]['L'];
        $karkas                  = $all_data[$i]['M'];
        $kulit_bulu                = $all_data[$i]['N'];
        $hati                 = $all_data[$i]['O'];
        $ginjal                 = $all_data[$i]['P'];
        $kepala_kaki                 = $all_data[$i]['Q'];
        $daging                 = $all_data[$i]['R'];
        $tulang                 = $all_data[$i]['S'];



        $sql .= "('','$ternak'
                    ,'$bangsa','$induk','$jantan','$tgl_lahir'
                    ,'$tgl_potong','$perlakuan'
                    ,'$sex','$ket','$potong','$karkas','$kulit_bulu','$hati'
                    ,'$ginjal','$kepala_kaki','$daging'
                    ,'$tulang'
                   ),";
    }
    $sql = substr($sql, 0, -1);

    // echo $sql;

    mysqli_query($conn, $sql);

    unlink($target_file);

    echo "
    <script>
        alert('data berhasil di import!');
        document.location.href = '../admin/index.php?menu=karkas';
    </script>";
} else {
    echo "
    <script>
        alert('data gagal di import!');
        document.location.href = '../admin/index.php?menu=dashboard;
    </script>
    ";
}
