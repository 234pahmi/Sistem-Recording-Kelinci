<!-- Modal kelinsi -->
<div class="modal fade" id="bersihkanData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Seluruh Data Kelinci</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="modal-body">
                        <div class="alert alert-danger mb-3" role="alert">
                            <b>Warning !</b> <br> Proses ini akan menghapuskan seluruh data kelinci
                        </div>
                        <select class="form-control form-control-sm mb-3" name="bersihkanKelinci" id="bersihkan" required>
                            <option>Pilih Bangsa Kelinci</option>
                            <?php foreach ($bangsaKelinci as $b) : ?>
                                <option value="<?= $b['bangsa'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="bersihkan">Yakin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<!-- modal perpotongan -->
<div class="modal fade" id="bersihkanDataPerpotongan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Seluruh Data Perpotongan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="modal-body">
                        <div class="alert alert-danger mb-3" role="alert">
                            <b>Warning !</b> <br> Proses ini akan menghapuskan seluruh data perpotongan
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="bersihkanPerpotongan">Yakin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>