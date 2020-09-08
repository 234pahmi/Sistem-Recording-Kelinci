<?php
$totAdmin = count(query("SELECT * FROM user WHERE role_id=1"));
$totPeneliti = count(query("SELECT * FROM user WHERE role_id=2"));
?>
<?php if (isset($_SESSION['pesan'])) : ?>
    <h5 class="alert alert-info text-center"><?= $_SESSION['pesan'] . ' ' . $_SESSION['email'] ?></h5>
    <?php unset($_SESSION['pesan']) ?>
<?php endif; ?>

<div class="col-md-5">
    <div class="card shadow border-success animated--fade-in">
        <h5 class="card-header bg-success text-white">Info User</h5>
        <div class="card-body">
            <div class="row mb-2">
                <?php if (isset($_SESSION['role_id'])) { ?>
                    <?php if ($_SESSION['role_id'] == 'admin') { ?>
                        <div class="col-md">
                            <div class="card border-left-success  h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totAdmin; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <div class="col-md">
                    <div class="card border-left-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Peneliti</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totPeneliti; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>