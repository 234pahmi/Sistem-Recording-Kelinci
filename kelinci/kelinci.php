<?php
$betinaHycole = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Hycole' AND bangsa_jantan ='Hycole' AND sex='Betina'"));
$betinaHyla = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Hyla' AND bangsa_jantan ='Hyla' AND sex='Betina'"));
$betinaNzw = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='NZW' AND bangsa_jantan ='NZW' AND sex='Betina'"));
$betinaReksi = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Reksi' AND bangsa_jantan ='Reksi' AND sex='Betina'"));
$betinaReza = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Reza' AND bangsa_jantan ='Reza' AND sex='Betina'"));
$betinaSatin = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Satin' AND bangsa_jantan ='Satin' AND sex='Betina'"));

$jantanHycole = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Hycole' AND bangsa_jantan ='Hycole' AND sex='Jantan'"));
$jantanHyla = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Hyla' AND bangsa_jantan ='Hyla' AND sex='Jantan'"));
$jantanNzw = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='NZW' AND bangsa_jantan ='NZW' AND sex='Jantan'"));
$jantanReksi = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Reksi' AND bangsa_jantan ='Reksi' AND sex='Jantan'"));
$jantanReza = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Reza' AND bangsa_jantan ='Reza' AND sex='Jantan'"));
$jantanSatin = count(query("SELECT * FROM kelinci WHERE bangsa_betina ='Satin' AND bangsa_jantan ='Satin' AND sex='Jantan'"));

?>

<div class="col-md-12  animated--fade-in">
    <div class="card shadow border-success">
        <h5 class="card-header bg-success text-white">Jumlah Kelinci Betina</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Hycole</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $betinaHycole; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Hyla</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $betinaHyla; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci NZW</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $betinaNzw; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Reksi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $betinaReksi; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Reza</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $betinaReza; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Satin</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $betinaSatin; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mt-5  animated--fade-in">
    <div class="card shadow border-success">
        <h5 class="card-header bg-success text-white">Jumlah Kelinci Jantan</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Hycole</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jantanHycole; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Hyla</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jantanHyla; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci NZW</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jantanNzw; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Reksi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jantanReksi; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Reza</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jantanReza; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md mt-3">
                    <div class="card border-bottom-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Kelinci Satin</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jantanSatin; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-paw fa-fw fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>