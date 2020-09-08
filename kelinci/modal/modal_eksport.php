<!-- Modul Eksport -->
<div class="modal fade" id="eksportKelinci" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eksport Data Kelinci</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="../kelinci/eksportData.php" target="_blank">
                    <div class="modal-body">
                        <select class="form-control form-control-sm" name="bangsa" id="bangsa" required>
                            <option>Pilih Bangsa Kelinci</option>
                            <?php foreach ($bangsaKelinci as $b) : ?>
                                <option value="<?= $b['bangsa'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select class="form-control form-control-sm mt-3" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Jantan & Betina">Jantan & Betina</option>
                            <option value="Jantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="eksport" target="_top">Eksport Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>