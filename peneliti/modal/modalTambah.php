<!-- Modal Tambah -->
<div class="modal fade" id="tambahPeneliti" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPeneliti">Tambah Data Peneliti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control form-control-sm" id="nama" placeholder="Masukan nama" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Masukan email" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Masukan password" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="password2" class="form-control form-control-sm" id="password2" placeholder="Konirmasi password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-sm" name="penelitian[]" id="penelitian1" required>
                            <option>Pilih Penelitian Pertama</option>
                            <?php foreach ($bangsa as $b) : ?>
                            <option value="<?= $b['id'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-sm" name="penelitian[]" id="penelitian2" required>
                            <option>Pilih Penelitian Kedua</option>
                            <?php foreach ($bangsa as $b) : ?>
                            <option value="<?= $b['id'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-sm" name="penelitian[]" id="penelitian3" required>
                            <option>Pilih Penelitian Ketiga</option>
                            <?php foreach ($bangsa as $b) : ?>
                            <option value="<?= $b['id'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" name="tambahPeneliti" class="btn btn-primary">Tambah Data</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<!-- Akhir modal tambah -->