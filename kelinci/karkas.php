<?php
error_reporting(0);
date_default_timezone_get('Asia/Jakarta');
require_once "../functions.php";

$karkas = query("SELECT * FROM karkas ORDER BY id ASC");

if (isset($_POST["tambahPerpotongan"])) {

    // cek apakah data berhasil diubah atau tidak
    if (tambahPerpotongan($_POST) > 0) {
        echo "
        <script>
            alert('data Berhasil ditambahkan!');
            document.location.href = 'index.php?menu=karkas';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php?menu=karkas';
        </script>
    ";
    }
}


if (isset($_POST["ubahPerpotongan"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubahPerpotongan($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php?menu=karkas';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php?menu=dataKelinci';
        </script>
    ";
    }
}



if (isset($_POST["bersihkanPerpotongan"])) {

    // cek apakah data berhasil diubah atau tidak
    if (hapusSemuaDataPerpotongan($_POST) < 0) {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php?menu=dataKelinci';
        </script>
    ";
    }
}

?>
<div class="card animated--fade-in">
    <p class="card-header bg-success text-white text-lg">Tabel Perpotongan</p>
    <div class="row mt-2 justify-content-end mr-3 mb-4">
        <div class="col-md">
            <div class="mt-3 mb-1 ml-4">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#printKarkas">Print PDF <i class="fas fa-fw fa-print"></i></button>
            </div>
        </div>
        <?php if ($_SESSION['role_id'] == 'admin') : ?>
            <div class="col-md-2">
                <div class="mt-3 mb-1">
                    <button class="btn btn-outline-danger btn-sm " data-toggle="modal" data-target="#bersihkanDataPerpotongan">Hapus Semua Data <i class="fas fa-fw fa-trash"></i></button>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-2 mr-4">
            <div class="mt-3 mb-1">
                <form method="post" action="../kelinci/eksportData.php" target="_blank">
                    <button class="btn btn-outline-success btn-sm " type="submit" name="perpotongan">Eksport Data Perpotongan <i class="fas fa-fw fa-file-export"></i></button>
                </form>
            </div>
        </div>
        <div class="col-md-2 mr-4">
            <div class="mt-3 mb-1">
                <button class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#importPerpotongan">Import Data Perpotongan <i class="fas fa-fw fa-file-import"></i></button>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mt-3 mb-1">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahKarkas">Tambah Perpotongan <i class="fas fa-fw fa-plus-circle"></i></button>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-2">
        <div class="col-md-12 table-responsive">
            <table class="table table-responsive table-hover table-bordered text-center" id="kelinci">
                <thead class="bg-success text-sm text-white">
                    <tr>
                        <th>Id</th>
                        <th>Ternak</th>
                        <th>Bangsa</th>
                        <th>No Induk</th>
                        <th>No Jantan</th>
                        <th>Tgl Lahir</th>
                        <th>Tgl Potong</th>
                        <th>Umur</th>
                        <th>Perlakuan</th>
                        <th>Sex</th>
                        <th>Ket</th>
                        <th>Potong</th>
                        <th>Karkas</th>
                        <th>Karkas (%)</th>
                        <th>Kulit + Bulu</th>
                        <th>Hati</th>
                        <th>Ginjal</th>
                        <th>Kepala + Kaki</th>
                        <th>Daging</th>
                        <th>Tulang</th>
                        <?php if ($_SESSION['role_id'] == 'admin') { ?>
                            <th>Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody class="text-sm-center">
                    <?php
                    $i = 1;
                    foreach ($karkas as $k) :
                        $tl = $k['tgl_lahir'];
                        $tgl_lahir = date("d/M/Y", strtotime($tl));

                        $tp = $k['tgl_potong'];
                        $tgl_potong = date("d/M/Y", strtotime($tp));

                        $awal = date_create($tl);
                        $akhir = date_create($tp);
                        $diff = date_diff($awal, $akhir);
                        $umur = $diff->days;
                        $karkas = round($k['potong'] / $k['karkas'] * 100);
                        ?>
                        <tr class="text-center">
                            <td><?= $i; ?></td>
                            <td><?= $k["ternak"] ?></td>
                            <td><?= $k["bangsa"] ?></td>
                            <td><?= $k["induk"] ?></td>
                            <td><?= $k["jantan"] ?></td>
                            <td><?= $tgl_lahir ?></td>
                            <td><?= $tgl_potong ?></td>
                            <td><?= $umur ?> Hari</td>
                            <td><?= $k["perlakuan"] ?></td>
                            <td><?= $k["sex"] ?></td>
                            <td><?= $k["ket"] ?></td>
                            <td><?= $k["potong"] ?> Gram</td>
                            <td><?= $k["karkas"] ?> Gram</td>
                            <td class="table-info"> <?= $karkas ?> %</td>
                            <td><?= $k["kulit_bulu"] ?> Gram</td>
                            <td><?= $k["hati"] ?> Gram</td>
                            <td><?= $k["ginjal"] ?> Gram</td>
                            <td><?= $k["kepala_kaki"] ?> Gram</td>
                            <td><?= $k["daging"] ?> Gram</td>
                            <td><?= $k["tulang"] ?> Gram</td>

                            <?php if ($_SESSION['role_id'] == 'admin') : ?>
                                <td>
                                    <a id="ubahKarkas" type="button" href="#" class="btn badge badge-success text-white" data-toggle="modal" data-target="#ubahKarkas<?= $k['id'] ?>">Edit</a>
                                    <a type="button" class="btn badge badge-danger" href="index.php?menu=hapusKarkas&aksi=hapusKarkas&id=<?= $k['id'] ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                        <div class="modal fade" id="ubahKarkas<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="ubahKarkas" aria-hidden="true">
                            <div class="modal-dialog  modal-lg modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahKarkas">Ubah Data Perpotongan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php include "modal/modal_ubah.php" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot class="bg-success text-sm text-white">
                    <tr>
                        <th>Id</th>
                        <th>Ternak</th>
                        <th>Bangsa</th>
                        <th>Induk</th>
                        <th>Jantan</th>
                        <th>Tgl Lahir</th>
                        <th>Tgl Potong</th>
                        <th>Umur</th>
                        <th>Perlakuan</th>
                        <th>Sex</th>
                        <th>Ket</th>
                        <th>Potong</th>
                        <th>Karkas</th>
                        <th>Karkas (%)</th>
                        <th>Kulit + Bulu</th>
                        <th>Hati</th>
                        <th>Ginjal</th>
                        <th>Kepala + Kaki</th>
                        <th>Daging</th>
                        <th>Tulang</th>
                        <?php if ($_SESSION['role_id'] == 'admin') { ?>
                            <th>Aksi</th>
                        <?php } ?>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php
require_once "modal/modal_tambah.php";
require_once "modal/modal_import.php";
require_once "modal/modal_eksport.php";
require_once "modal/modal_print.php";
require_once "modal/modal_hapusSemuaData.php";

?>

<!-- <div class="container" style="margin-top: 10px;text-align:center;">
    <div class="row">
        <button class="btn btn-warning" onclick="notifikasi()">
            Klik Disini
        </button>
    </div>
</div> -->