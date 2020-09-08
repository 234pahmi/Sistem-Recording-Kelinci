  <?php
    $bangsa = query("SELECT * FROM jeniskelinci");
    error_reporting(0);

    if (isset($_POST['rata2'])) {
        if ($_POST['jenis'] == 'Hyla') {
            $judul = "Hyla";
            $judul2 = "Pertumbuhan Rata-Rata";
            $judul3 = "Pertumbuhan Rata-Rata Berdasarkan F";
        } elseif ($_POST['jenis'] == 'Hycole') {
            $judul = "Hycole";
            $judul2 = "Pertumbuhan Rata-Rata";
            $judul3 = "Pertumbuhan Rata-Rata Berdasarkan F";
        } elseif ($_POST['jenis'] == 'NZW') {
            $judul = "NZW";
            $judul2 = "Pertumbuhan Rata-Rata";
            $judul3 = "Pertumbuhan Rata-Rata Berdasarkan F";
        } elseif ($_POST['jenis'] == 'Reksi') {
            $judul = "Reksi";
            $judul2 = "Pertumbuhan Rata-Rata";
            $judul3 = "Pertumbuhan Rata-Rata Berdasarkan F";
        } elseif ($_POST['jenis'] == 'Reza') {
            $judul = "Reza";
            $judul2 = "Pertumbuhan Rata-Rata";
            $judul3 = "Pertumbuhan Rata-Rata Berdasarkan F";
        } elseif ($_POST['jenis'] == 'Satin') {
            $judul = "Satin";
            $judul2 = "Pertumbuhan Rata-Rata";
            $judul3 = "Pertumbuhan Rata-Rata Berdasarkan F";
        } else {
            $_SESSION['pesan'] =  "Silahkan Pilih Bangsa Kelinci";
            $judul = "";
            $judul2 = "";
            $judul3 = "";
        }
        $kelinciBetina = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19), AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND sex='Betina'");
        $kelinciJantan = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19) , AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND sex='Jantan'");
        $f1 = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19) , AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND f=1");
        $f2 = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19) , AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND f=2");
        $f3 = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19) , AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND f=3");
        $f4 = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19) , AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND f=4");
        $f5 = query("SELECT AVG(minggu_5), AVG(minggu_7), AVG(minggu_9), AVG(minggu_11), AVG(minggu_13), AVG(minggu_15), AVG(minggu_17), AVG(minggu_19) , AVG(minggu_21), AVG(minggu_23) FROM kelinci WHERE bangsa_betina =  '$judul' AND f=5");
    } else {
        $_SESSION['pesan'] =  "Silahkan Pilih Bangsa Kelinci";
        $judul = "";
        $judul2 = "";
        $judul3 = "";
    }

    ?>

  <!-- Area Chart -->
  <div class="card shadow mb-4 animated--fade-in">
      <div class="card-header py-3 bg-success">
          <h6 class="m-0 font-weight-bold text-white">Diagram Pertumbuhan Rata-Rata Kelinci <?= $judul ?></h6>
      </div>
      <div class="row">
          <div class="col-md-4 ml-4 mt-3">
              <form action="" method="post">
                  <div class="form-group form-inline">
                      <select class="form-control form-control-sm mt-2" name="jenis" id="jenis" required>
                          <option>Pilih Bangsa Kelinci</option>
                          <?php foreach ($bangsaKelinci as $b) : ?>
                              <option value="<?= $b['bangsa'] ?>"><?= $b['bangsa'] ?></option>
                          <?php endforeach; ?>
                      </select>
                      <button type="submit" name="rata2" class="ml-2 mt-2 btn btn-sm btn-outline-primary">Pilih</button>
                  </div>
              </form>
          </div>
      </div>
      <h3 class="text-dark text-center"><b><?= $judul ?></b></h3>
      <h4 class="text-dark text-center"><?= $judul2 ?></h4>
      <div class="card-body">
          <div class="chart-area">
              <?php if (isset($_SESSION['pesan'])) : ?>
                  <div class="alert alert-info text-center"><?= $_SESSION['pesan'] ?></div>
                  <?php unset($_SESSION['pesan']); ?>
              <?php endif; ?>
              <canvas id="pertumbuhan"></canvas>
          </div>
          <div class="chart-area mt-5">
              <h4 class="text-dark text-center"><?= $judul3 ?></h4>
              <canvas id="f"></canvas>
          </div>
      </div>
  </div>
  <?php require_once "chart.php" ?>