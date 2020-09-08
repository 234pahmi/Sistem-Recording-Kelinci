<!-- Modal Pirnt-->
<div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Print Data Kelinci PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="../kelinci/print.php?aksi=kelinci" target="_blank">
                    <div class="modal-body">
                        <select class="form-control form-control-sm" name="bangsa" id="bangsa" required>
                            <option value="semua">Semua Bangsa Kelinci</option>
                            <?php foreach ($bangsaKelinci as $b) : ?>
                                <option value="<?= $b['bangsa'] ?>"><?= $b['bangsa'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <hr class="mt-3">
                        <p class="lead text-center mt-2">Print Berdasarkan Tanggal Lahir Kelinci</p>
                        <div class="form-group">
                            <label class="control-label" for="awal">Tanggal Awal :</label>
                            <input type="date" name="tgl_awal" class="form-control form-control-sm" id="awal" required>
                            <label class="control-label mt-3" for="akhir">Tanggal Akhir :</label>
                            <input type="date" name="tgl_akhir" class="form-control form-control-sm" id="akhir" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="print">Print Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- print karkas -->
<div class="modal fade" id="printKarkas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Print Data Karkas PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="../kelinci/print.php?aksi=karkas" target="_blank">
                    <div class="modal-body">
                        <p class="lead text-center mt-2">Print Berdasarkan Tanggal Potong Karkas</p>
                        <hr class="mt-3">
                        <div class="form-group">
                            <label class="control-label" for="awal">Tanggal Awal :</label>
                            <input type="date" name="tgl_awal" class="form-control form-control-sm" id="awal" required>
                            <label class="control-label mt-3" for="akhir">Tanggal Akhir :</label>
                            <input type="date" name="tgl_akhir" class="form-control form-control-sm" id="akhir" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="printKarkas">Print Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>