<?php
date_default_timezone_set('Asia/Jakarta');
require_once "../functions.php";
if (!isset($_GET['jenis'])) {
    echo "
    <script>
        document.location.href = 'index.php?menu=kelinci';
    </script>
";
}

if (isset($_GET["jenis"])) {
    if ($_GET["jenis"] == "hycole") {
        $kelinci = query("SELECT * FROM kelinci WHERE bangsa_betina = 'Hycole' AND  bangsa_jantan = 'Hycole' ");
        $tabel = "hycole";
        $judul = "Table Hycole";
    } elseif ($_GET["jenis"] == "hyla") {
        $kelinci = query("SELECT * FROM kelinci WHERE bangsa_betina = 'Hyla' AND  bangsa_jantan = 'Hyla' ");
        $tabel = "hyla";
        $judul = "Table Hyla";
    } elseif ($_GET["jenis"] == "nzw") {
        $kelinci = query("SELECT * FROM kelinci WHERE bangsa_betina = 'NZW' AND  bangsa_jantan = 'NZW' ");
        $tabel = "nzw";
        $judul = "Table NZW";
    } elseif ($_GET["jenis"] == "reksi") {
        $kelinci = query("SELECT * FROM kelinci WHERE bangsa_betina = 'Reksi' AND  bangsa_jantan = 'Reksi' ");
        $tabel = "reksi";
        $judul = "Table Reksi";
    } elseif ($_GET["jenis"] == "reza") {
        $kelinci = query("SELECT * FROM kelinci WHERE bangsa_betina = 'Reza' AND  bangsa_jantan = 'Reza' ");
        $tabel = "reza";
        $judul = "Table Reza";
    } elseif ($_GET["jenis"] == "satin") {
        $kelinci = query("SELECT * FROM kelinci WHERE bangsa_betina = 'Satin' AND  bangsa_jantan = 'Satin' ");
        $tabel = "satin";
        $judul = "Table Satin";
    } else {
        echo "
		<script>
			document.location.href = 'index.php?menu=kelinci';
		</script>
	";
    }
}


if (isset($_POST["tambahKelinci"])) {

    // cek apakah data berhasil diubah atau tidak
    if (tambahKelinci($_POST) < 0) {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php?menu=dataKelinci';
        </script>
    ";
    }
}


if (isset($_POST["ubahKelinci"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubahKelinci($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php?menu=dataKelinci&jenis=$tabel';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php?menu=dataKelinci&jenis=$tabel';
        </script>
    ";
    }
}


if (isset($_POST["bersihkan"])) {

    // cek apakah data berhasil diubah atau tidak
    if (hapusSemuaDataKelinci($_POST) < 0) {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php?menu=dataKelinci';
        </script>
    ";
    }
}

?>
<div class="card animated--grow-in">
    <div class="card-header bg-success text-white text-lg"><?= $judul ?></div>
    <div class="row mt-2 justify-content-end ml-3">
        <div class="col-md">
            <div class="mt-3 mb-1">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#print">Print PDF <i class="fas fa-fw fa-print"></i></button>
            </div>
        </div>
        <?php if ($_SESSION['role_id'] == 'admin') : ?>
            <div class="col-md-2">
                <div class="mt-3 mb-1">
                    <button class="btn btn-outline-danger btn-sm " data-toggle="modal" data-target="#bersihkanData">Hapus Semua Data <i class="fas fa-fw fa-trash"></i></button>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-2">
            <div class="mt-3 mb-1">
                <button class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#eksportKelinci">Eksport Data Kelinci <i class="fas fa-fw fa-file-export"></i></button>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mt-3 mb-1">
                <button class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#importKelinci">Import Data Kelinci <i class="fas fa-fw fa-file-import"></i></button>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mt-3 mb-1">
                <button class="btn btn-primary btn-sm sti" data-toggle="modal" data-target="#tambahKelinci">Tambah Kelinci <i class="fas fa-fw fa-plus-circle"></i></button>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-3">
        <div class="col-md-12 table-responsive">
            <table class="table table-responsive table-hover table-bordered text-center" id="kelinci">
                <thead class="bg-success text-sm text-white">
                    <tr>
                        <th>Id</th>
                        <th>Betina</th>
                        <th>Bangsa Betina</th>
                        <th>Jantan</th>
                        <th>Bangsa - Jantan</th>
                        <th>Ls Lahir</th>
                        <th>Tgl Lahir</th>
                        <th>Sex</th>
                        <th>F</th>
                        <th>Angkatan</th>
                        <th>Ear Tag</th>
                        <th>No Indv</th>
                        <th>M - 5 (gram)</th>
                        <th>M - 7 (gram)</th>
                        <th>PBB 5-7 (gram)</th>
                        <th>M - 9 (gram)</th>
                        <th>M - 11 (gram)</th>
                        <th>PBB 9-11 (gram)</th>
                        <th>M - 13 (gram)</th>
                        <th>M - 15 (gram)</th>
                        <th>PBB 13-15 (gram)</th>
                        <th>M - 17 (gram)</th>
                        <th>M - 19 (gram)</th>
                        <th>PBB 17-19 (gram)</th>
                        <th>M - 21 (gram)</th>
                        <th>M - 23 (gram)</th>
                        <th>PBB 21-23 (gram)</th>
                        <th>Ket</th>
                        <?php if ($_SESSION['role_id'] == 'admin') { ?>
                            <th>Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody class="text-sm-center">
                    <?php $i = 1; ?>
                    <?php foreach ($kelinci as $k) : ?>
                        <?php
                            $akhir = date_create();
                            $tl = $k['tgl_lahir'];
                            $tgl_lahir = date("d/M/Y", strtotime($tl));
                            $m5 = date('d/M/Y', strtotime('+35 days', strtotime($tl)));
                            $awal_m5 = date_create(date('Y-m-d', strtotime('+35 days', strtotime($tl))));
                            $diff_m5 = date_diff($awal_m5, $akhir);

                            $m7 = date('d/M/Y', strtotime('+49 days', strtotime($tl)));
                            $awal_m7 = date_create(date('Y-m-d', strtotime('+49 days', strtotime($tl))));
                            $diff_m7 = date_diff($awal_m7, $akhir);

                            $m9 = date('d/M/Y', strtotime('+63 days', strtotime($tl)));
                            $awal_m9 = date_create(date('Y-m-d', strtotime('+63 days', strtotime($tl))));
                            $diff_m9 = date_diff($awal_m9, $akhir);

                            $m11 = date('d/M/Y', strtotime('+77 days', strtotime($tl)));
                            $awal_m11 = date_create(date('Y-m-d', strtotime('+77 days', strtotime($tl))));
                            $diff_m11 = date_diff($awal_m11, $akhir);

                            $m13 = date('d/M/Y', strtotime('+91 days', strtotime($tl)));
                            $awal_m13 = date_create(date('Y-m-d', strtotime('+91 days', strtotime($tl))));
                            $diff_m13 = date_diff($awal_m13, $akhir);

                            $m15 = date('d/M/Y', strtotime('+105 days', strtotime($tl)));
                            $awal_m15 = date_create(date('Y-m-d', strtotime('+105 days', strtotime($tl))));
                            $diff_m15 = date_diff($awal_m15, $akhir);

                            $m17 = date('d/M/Y', strtotime('+119 days', strtotime($tl)));
                            $awal_m17 = date_create(date('Y-m-d', strtotime('+119 days', strtotime($tl))));
                            $diff_m17 = date_diff($awal_m17, $akhir);

                            $m19 = date('d/M/Y', strtotime('+133 days', strtotime($tl)));
                            $awal_m19 = date_create(date('Y-m-d', strtotime('+133 days', strtotime($tl))));
                            $diff_m19 = date_diff($awal_m19, $akhir);

                            $m21 = date('d/M/Y', strtotime('+147 days', strtotime($tl)));
                            $awal_m21 = date_create(date('Y-m-d', strtotime('+147 days', strtotime($tl))));
                            $diff_m21 = date_diff($awal_m21, $akhir);

                            $m23 = date('d/M/Y', strtotime('+161 days', strtotime($tl)));
                            $awal_m23 = date_create(date('Y-m-d', strtotime('+161 days', strtotime($tl))));
                            $diff_m23 = date_diff($awal_m23, $akhir);
                            ?>
                        <tr class="text-center">
                            <td><?= $i; ?></td>
                            <td><?= $k["betina"] ?></td>
                            <td><?= $k["bangsa_betina"] ?></td>
                            <td><?= $k["jantan"] ?></td>
                            <td><?= $k["bangsa_jantan"] ?></td>
                            <td><?= $k["ls_lahir"] ?></td>
                            <td><?= $tgl_lahir ?></td>
                            <td><?= $k["sex"] ?></td>
                            <td><?= $k["f"] ?></td>
                            <td><?= $k["angkatan"] ?></td>
                            <td><?= $k["ear_tag"] ?></td>
                            <td><?= $k["no_indv"] ?></td>
                            <td><?= $k["minggu_5"] . "<br>" . $m5 . " " ?>
                                <?php
                                    $hasil_m5 = $diff_m5->days;
                                    if ($hasil_m5 > 0 && $hasil_m5 < 3) {
                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m5 . " hari</div>";
                                    } elseif ($hasil_m5 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td><?= $k["minggu_7"] . "<br>" . $m7 . " " ?>
                                <?php
                                    $hasil_m7 = $diff_m7->days;
                                    if ($hasil_m7 > 0 && $hasil_m7 < 3) {
                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m7 . " hari</div>";
                                    } elseif ($hasil_m7 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td class="table-info"><?= $k["minggu_5"] - $k["minggu_7"] ?></td>
                            <td><?= $k["minggu_9"] . "<br>" . $m9  ?>
                                <?php
                                    $hasil_m9 = $diff_m9->days;
                                    if ($hasil_m9 > 0 && $hasil_m9  < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m9 . " hari</div>";
                                    } elseif ($hasil_m9 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td><?= $k["minggu_11"] . "<br>" . $m11  ?>
                                <?php
                                    $hasil_m11 = $diff_m11->days;
                                    if ($hasil_m11 > 0 && $hasil_m11 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m11 . " hari</div>";
                                    } elseif ($hasil_m11 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td class="table-info"><?= $k["minggu_9"] - $k["minggu_11"] ?></td>
                            <td><?= $k["minggu_13"] . "<br>" . $m13 ?>
                                <?php
                                    $hasil_m13 = $diff_m13->days;
                                    if ($hasil_m13 > 0 && $hasil_m13 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m13 . " hari</div>";
                                    } elseif ($hasil_m13 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td><?= $k["minggu_15"] . "<br>" . $m15  ?>
                                <?php
                                    $hasil_m15 = $diff_m15->days;
                                    if ($hasil_m15 > 0 && $hasil_m15 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m15 . " hari</div>";
                                    } elseif ($hasil_m15 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td class="table-info"><?= $k["minggu_13"] - $k["minggu_15"] ?></td>
                            <td><?= $k["minggu_17"] . "<br>" . $m17  ?>
                                <?php
                                    $hasil_m17 = $diff_m17->days;
                                    if ($hasil_m17 > 0 && $hasil_m17 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m17 . " hari</div>";
                                    } elseif ($hasil_m17 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td><?= $k["minggu_19"] . "<br>" . $m19 ?>
                                <?php
                                    $hasil_m19 = $diff_m19->days;
                                    if ($hasil_m19 > 0 && $hasil_m19 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m19 . " hari</div>";
                                    } elseif ($hasil_m19 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td class="table-info"><?= $k["minggu_17"] - $k["minggu_19"] ?></td>
                            <td><?= $k["minggu_21"] . "<br>" . $m21  ?>
                                <?php
                                    $hasil_m21 = $diff_m21->days;
                                    if ($hasil_m21 > 0 && $hasil_m21 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m21 . " hari</div>";
                                    } elseif ($hasil_m21 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td><?= $k["minggu_23"] . "<br>" . $m23  ?>
                                <?php
                                    $hasil_m23 = $diff_m23->days;
                                    if ($hasil_m23 > 0 && $hasil_m23 < 3) {

                                        echo "<div class='text-white p-1 bg bg-danger'>" . $hasil_m23 . " hari</div>";
                                    } elseif ($hasil_m23 == 0) {
                                        echo "<div class='text-white p-1 bg bg-primary'>Hari Penimbangan</div>";
                                    }
                                    ?>
                            </td>
                            <td class="table-info"><?= $k["minggu_21"] - $k["minggu_23"] ?></td>
                            <td><?= $k["ket"] ?></td>
                            <?php if ($_SESSION['role_id'] == 'admin') : ?>
                                <td>
                                    <a id="ubah-Kelinci" type="button" href="#" class="btn badge badge-success text-white" data-toggle="modal" data-target="#ubahKelinci<?= $k['id'] ?>">Edit</a>
                                    <a type="button" class="btn badge badge-danger" href="index.php?menu=hapusKelinci&jenis=<?= $_GET['jenis'] ?>&id=<?= $k['id'] ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                        <div class="modal fade" id="ubahKelinci<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="ubahKelinci" aria-hidden="true">
                            <div class="modal-dialog  modal-lg modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahKelinci">Ubah Data Kelinci</h5>
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
                        <th>Betina</th>
                        <th>Bangsa Betina</th>
                        <th>Jantan</th>
                        <th>Bangsa - Jantan</th>
                        <th>Ls Lahir</th>
                        <th>Tgl Lahir</th>
                        <th>Sex</th>
                        <th>F</th>
                        <th>Angkatan</th>
                        <th>Ear Tag</th>
                        <th>No Indv</th>
                        <th>M - 5 (gram)</th>
                        <th>M - 7 (gram)</th>
                        <th>PBB 5-7 (gram)</th>
                        <th>M - 9 (gram)</th>
                        <th>M - 11 (gram)</th>
                        <th>PBB 9-11 (gram)</th>
                        <th>M - 13 (gram)</th>
                        <th>M - 15 (gram)</th>
                        <th>PBB 13-15 (gram)</th>
                        <th>M - 17 (gram)</th>
                        <th>M - 19 (gram)</th>
                        <th>PBB 17-19 (gram)</th>
                        <th>M - 21 (gram)</th>
                        <th>M - 23 (gram)</th>
                        <th>PBB 21-23 (gram)</th>
                        <th>Ket</th>
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