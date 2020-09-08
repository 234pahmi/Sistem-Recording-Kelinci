<?php
session_start();
require 'functions.php';

if (isset($_SESSION['role_id'])) {
    if ($_SESSION['role_id'] === "admin") {
        header("Location: admin/index.php?menu=dashboard");
    } elseif ($_SESSION['role_id'] === "peneliti") {
        header("Location: peneliti/index.php?menu=dashboard");
    }
}

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="img/png" href="assets/img/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS ku -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <title>Balitnak | Registrasi</title>
</head>

<body class="bg bg-success">
    <div class="container">
        <div class="col-md-6 mx-auto mt-5 shadow mb-5 bg-white px-5 py-3 radius">
            <div class="col-md mt-3">
                <img src="assets/img/logo.png" alt="logo" width="100px" class="mx-auto d-block">
                <h4 class="text-center text-success my-3">BALAI PENELITIAN TERNAK (BALITNAK)</h4>
                <h5 class="text-center text-success my-3">REGISTRASI</h5>
            </div>
            <hr>
            <form action="" method="POST">
                <div class="form-group">
                    <div class="row my-4">
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" Required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row my-4">
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" Required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row my-4">
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" Required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row my-4">
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password" Required>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row mt-2">
                    <div class="col-md mt-2">
                        <button type="submit" name="register" class="btn btn-primary btn-block rounded-pill">Registrasi</button>
                    </div>
                </div>
                <div class="col-md">
                    <a href="login.php" class="text-decoration-none">
                        <p class="text-center my-3 text-dark text-decoration-none">Kembali</p>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>