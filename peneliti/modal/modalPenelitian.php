<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="penelitian">Penelitian yang di ambil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
    $id = $p['id'];
    $penelitian = query("SELECT * FROM penelitian INNER JOIN jeniskelinci ON penelitian.id_bangsa = jeniskelinci.id INNER JOIN user ON penelitian.id_user = user.id WHERE user.id='$id'");
    $i = 1;
    foreach ($penelitian as $pn) :
        ?>
    <div class="modal-body">
        <div class="form-group mb-n2">
            <label for="penelitian[]">Penelitian <?= $i++ ?></label>
            <input type="text" name="penelitian[]" class="form-control form-control-sm" id="penelitian[]" value="<?= $pn['bangsa'] ?>" readonly>
        </div>
    </div>
    <?php endforeach; ?>
</div>