<?php

// cek apakah tombol submit sudah ditekan atau belum

if (isset($_POST["tambahAdmin"])) {

    // cek apakah data berhasil diubah atau tidak
    if (tambahAdmin($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php?menu=dataAdmin';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php?menu=dataAdmin';
			</script>
		";
    }
}

if (isset($_POST["cariAdmin"])) {
    $admin = cariAdmin($_POST["keyword"]);
}


if (isset($_POST["ubahAdmin"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubahAdmin($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php?menu=dataAdmin';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php?menu=dataAdmin';
            </script>
        ";
    }
}
?>


<div class="card  animated--fade-in">
    <p class="card-header text-lg bg-success text-white">Table Admin</p>
    <div class="row  my-4">
        <div class="col-md-3 ml-4">
            <form class="form-inline" method="post" action="">
                <input class="form-control form-control-sm" type="search" placeholder="Pencarian" aria-label="Search" autofocus name="keyword" aria-label="Search">
                <button class="btn btn-outline-info btn-sm " type="submit" name="cariAdmin">Search</button>
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($admin as $a) { ?>
                        <tr class="text-center">
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $a["nama"] ?></td>
                            <td><?= $a["email"] ?></td>
                            <td><img src="../assets/img/profile/<?= $a["img"] ?>" width="40" height="40"></td>
                            <td><?= date('d F Y', $a["tgl_buat"]) ?></td>
                            <td>
                                <a type="button" class="btn badge badge-success" href="#" data-toggle="modal" data-target="#ubahAdmin<?= $a['id'] ?>">Edit</a> ||
                                <a type="button" class="btn badge badge-danger" href="index.php?menu=hapusAdmin&aksi=hapusAdmin&id=<?= $a['id'] ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                            </td>
                        </tr>

                        <!-- Modal Ubah -->
                        <div class="modal fade" id="ubahAdmin<?= $a['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahAdmin">Ubah Data Admin</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <?php
                                        $id = $a['id'];
                                        $adminModal = query("SELECT * FROM user WHERE id = '$id'");
                                        foreach ($adminModal as $am) :
                                            ?>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" class="form-control form-control-sm" id="id" value="<?= $am['id'] ?>">
                                                <input type="hidden" name="gambarLama" class="form-control form-control-sm" id="gambarLama" value="<?= $am['img'] ?>">
                                                <input type="hidden" name="passwordLama" class="form-control form-control-sm" id="passwordLama" value="<?= $am['password'] ?>">
                                                <div class="form-group">
                                                    <input type="text" name="nama" class="form-control form-control-sm" id="nama" value="<?= $am['nama'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control form-control-sm" id="email" value="<?= $am['email'] ?>" readonly>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 ">
                                                        <label for="password">Password Lama</label>
                                                        <input type="password" name="password" class="form-control form-control-sm" id="password" value="<?= $am['password'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="passwordBaru">Password Baru</label>
                                                        <input type="password" name="passwordBaru" class="form-control form-control-sm" id="passwordBaru" placeholder="Password Baru" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputAddress">Foto</label>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <img src=" ../assets/img/profile/<?= $am['img'] ?>" width="300" class="img-thumbnail">
                                                            </div>
                                                            <input type="file" name="gambar" id="gambar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                                <button type="submit" name="ubahAdmin" class="btn btn-primary">Ubah Data</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir modal Ubah -->
                        <?php $i++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-2 justify-content-end">
        <div class="col-md-2">
            <div class="mb-4">
                <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#tambahAdmin">Tambah Admin <i class="fas fa-plus-circle"></i></button>
            </div>
        </div>
    </div>
</div>
</div>






<!-- Modal Tambah -->
<div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahAdmin">Tambah Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control form-control-sm" id="nama" placeholder="Masukan nama">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Masukan email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Masukan password">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="password2" class="form-control form-control-sm" id="password2" placeholder="Konirmasi password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" name="tambahAdmin" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Akhir modal tambah -->