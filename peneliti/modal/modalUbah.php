<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="ubahPeneliti">Ubah Data Peneliti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <?php
        $id = $p['id'];
        $penelitiModal = query("SELECT * FROM user WHERE id = '$id'");
        foreach ($penelitiModal as $pm) :
            ?>
        <div class="modal-body">
            <input type="hidden" name="id_peneliti" class="form-control form-control-sm" id="id" value="<?= $pm['id'] ?>">
            <input type="hidden" name="gambarLama" class="form-control form-control-sm" id="gambarLama" value="<?= $pm['img'] ?>">
            <input type="hidden" name="passwordLama" class="form-control form-control-sm" id="passwordLama" value="<?= $pm['password'] ?>">
            <div class="form-group">
                <input type="text" name="nama" class="form-control form-control-sm" id="nama" value="<?= $pm['nama'] ?>">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-sm" id="email" value="<?= $pm['email'] ?>" readonly>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="password">Password Lama</label>
                    <input type="password" name="password" class="form-control form-control-sm" id="password" value="<?= $pm['password'] ?>" readonly>
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
                            <img src=" ../assets/img/profile/<?= $pm['img'] ?>" width="300" class="img-thumbnail">
                        </div>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" name="ubahPeneliti" class="btn btn-primary">Ubah Data</button>
        </div>
        <?php endforeach; ?>
    </form>
</div>