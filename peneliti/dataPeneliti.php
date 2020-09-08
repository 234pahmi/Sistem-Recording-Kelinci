<?php

// cek apakah tombol submit sudah ditekan atau belum

if (isset($_POST["tambahPeneliti"])) {

    // cek apakah data berhasil diubah atau tidak
    if (tambahPeneliti($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php?menu=dataPeneliti';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php?menu=dataPeneliti';
			</script>
		";
    }
}

if (isset($_POST["cariPeneliti"])) {
    $peneliti = cariPeneliti($_POST["keyword"]);
}



if (isset($_POST["ubahPeneliti"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubahPeneliti($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php?menu=dataPeneliti';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php?menu=dataPeneliti';
            </script>
        ";
    }
}

$bangsa = query("SELECT * FROM jeniskelinci");
?>


<div class="card  animated--fade-in">
    <p class="card-header bg-success text-white text-lg">Table Peneliti</p>
    <div class="row my-4">
        <div class="col-md-3 ml-4">
            <form class="form-inline" method="post" action="">
                <input class="form-control form-control-sm" type="search" placeholder="Pencarian" aria-label="Search" autofocus name="keyword" aria-label="Search">
                <button class="btn btn-outline-info btn-sm " type="submit" name="cariPeneliti">Search</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover display table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Tanggal</th>
                        <th>Penelitian</th>
                        <?php if ($_SESSION["role_id"] == "admin" || $_SESSION["email"] == $_SESSION["email"]) { ?>
                            <th>Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($peneliti as $p) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p["nama"] ?></td>
                            <td><?= $p["email"] ?></td>
                            <td><img src="../assets/img/profile/<?= $p["img"] ?>" width="40" height="40"></td>
                            <td><?= date('d F Y', $p["tgl_buat"]) ?></td>
                            <td> <a type="button" class="btn badge badge-info" href="#" data-toggle="modal" data-target="#penelitian<?= $p['id'] ?>">Lihat Penelitian</a></td>
                            <?php if ($_SESSION["role_id"] == "admin") { ?>
                                <td>
                                    <a type="button" class="btn badge badge-success" href="#" data-toggle="modal" data-target="#ubahPeneliti<?= $p['id'] ?>">Edit</a> ||
                                    <a type="button" class="btn badge badge-danger" href="index.php?menu=hapusPeneliti&aksi=hapusPeneliti&id=<?= $p['id'] ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                                </td>
                            <?php } elseif ($_SESSION['email'] == $_SESSION['email']) { ?>
                                <td>
                                    <?php if ($_SESSION['email'] != $p['email']) {
                                                echo " - ";
                                            } else { ?>
                                        <a type="button" class="btn badge badge-success" href="#" data-toggle="modal" data-target="#ubahPeneliti<?= $p['id'] ?>">Edit</a>
                                    <?php } ?>
                                </td>
                            <?php } ?>

                        </tr>

                        <!-- Modal Ubah -->
                        <div class="modal fade" id="ubahPeneliti<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <?php include "modal/modalUbah.php" ?>
                            </div>
                        </div>
                        <!-- Akhir modal Ubah -->

                        <!-- Modal Penelitian -->
                        <div class="modal fade" id="penelitian<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <?php include "modal/modalPenelitian.php" ?>
                            </div>
                        </div>
                        <!-- Akhir modal Penelitian -->
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if ($_SESSION["role_id"] == "admin") { ?>
            <div class="row mt-2 justify-content-end">
                <div class="col-md-2">
                    <div class="mb-4">
                        <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#tambahPeneliti">Tambah Peneleiti <i class="fas fa-plus-circle"></i></button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require_once "modal/modalTambah.php"; ?>