<?php

if (isset($_POST['tambahBangsa'])) {
    if (bangsaKelinci($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php?menu=bangsaKelinci';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php?menu=bangsaKelinci';
			</script>
		";
    }
}


if (isset($_POST['ubahBangsa'])) {
    if (ubahBangsaKelinci($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php?menu=bangsaKelinci';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php?menu=bangsaKelinci';
			</script>
		";
    }
}


?>


<div class="col-md-6">
    <div class="card">
        <p class="card-header bg-success text-white text-lg">Table Bangsa Kelinci</p>
        <div class="container">
            <?php if ($_SESSION["role_id"] == "admin") { ?>
            <div class="row mt-3 ">
                <div class="col-md-2">
                    <div class="mb-4">
                        <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#tambahBangsa">Tambah Bangsa <i class="fas fa-plus-circle"></i></button>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-md table-responsive">
                <table class="table table-hover display table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Bangsa</th>
                            <th>Link</th>
                            <?php if ($_SESSION["role_id"] == "admin") { ?>
                            <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($bangsaKelinci as $bk) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $bk["bangsa"] ?></td>
                            <td><?= $bk["link"] ?></td>
                            <?php if ($_SESSION["role_id"] == "admin") { ?>
                            <td>
                                <a type="button" class="btn badge badge-success" href="#" data-toggle="modal" data-target="#ubahBangsa<?= $bk['id'] ?>">Edit</a> ||
                                <a type="button" class="btn badge badge-danger" href="index.php?menu=hapusBangsa&aksi=hapusBangsa&id=<?= $bk['id'] ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                            </td>
                            <?php } ?>
                        </tr>

                        <!-- Modal Ubah -->
                        <div class="modal fade" id="ubahBangsa<?= $bk['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahBangsa">Ubah Data Peneliti</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <?php
                                            $id = $bk['id'];
                                            $bangsaModal = query("SELECT * FROM jeniskelinci WHERE id = '$id'");
                                            foreach ($bangsaModal as $bm) :
                                                ?>
                                        <div class="modal-body">
                                            <input type="hidden" name="id_bangsa" class="form-control form-control-sm" id="id_bangsa" value="<?= $bm['id'] ?>">
                                            <div class="form-group">
                                                <input type="text" name="bangsa" class="form-control form-control-sm" id="bangsa" value="<?= $bm['bangsa'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="link" class="form-control form-control-sm" id="link" value="<?= $bm['link'] ?>" placeholder="Masukan link">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                            <button type="submit" name="ubahBangsa" class="btn btn-primary">Ubah Data</button>
                                        </div>
                                        <?php endforeach; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir modal Ubah -->
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>







<!-- Modal Tambah -->
<div class="modal fade" id="tambahBangsa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBangsa">Tambah Bangsa Kelinci</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="bangsa" class="form-control form-control-sm" id="bangsa" placeholder="Masukan nama Bangsa">
                    </div>
                    <div class="form-group">
                        <input type="text" name="link" class="form-control form-control-sm" id="link" placeholder="Masukan link">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" name="tambahBangsa" class="btn btn-primary">Tambah Bangsa</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Akhir modal tambah -->