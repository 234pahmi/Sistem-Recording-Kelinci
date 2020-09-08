<!-- Modal Import-->
<div class="modal fade" id="importKelinci" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Kelinci</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="../kelinci/importData.php">
                    <div class="modal-body">
                        <select class="form-control form-control-sm" name="bangsa" id="bangsa" required>
                            <option>Pilih Bangsa Kelinci</option>
                            <?php foreach ($bangsaKelinci as $b) : ?>
                                <option value="<?= $b['bangsa'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-group">
                            <label class="control-label mt-3" for="file">File Excel :</label>
                            <input type="file" name="kelinci" class="pb-5 pt-2 form-control form-control-sm" id="file" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="import">Import Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Modal Import Perpotongan-->
<div class="modal fade" id="importPerpotongan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Perpotongan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="../kelinci/importData.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label mt-3" for="file">File Excel :</label>
                            <input type="file" name="perpotongan" class="pb-5 pt-2 form-control form-control-sm" id="file" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="perpotongan">Import Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>