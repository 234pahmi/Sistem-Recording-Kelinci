<?php
session_start();
error_reporting(0);
require_once '../functions.php';
if (!isset($_SESSION['email']) && !isset($_SESSION['role_id'])) {
    echo "<script>
            alert('Silahkan login kembali!');
            document.location.href = '../login.php';
        </script>";
    exit();
} elseif (isset($_SESSION['role_id'])) {
    if ($_SESSION['role_id'] == "peneliti") {
        header("Location: ../peneliti/index.php?menu=dashboard");
    }
}

require_once '../assets/templates/header.php';
require_once '../assets/templates/sidebar.php';


if ($_GET["menu"] == "dashboard") {
    include "dashboard.php";
} elseif ($_GET["menu"] == "dataAdmin") {
    include "dataAdmin.php";
} elseif ($_GET["menu"] == "bangsaKelinci") {
    include "bangsaKelinci.php";
} elseif ($_GET["menu"] == "dataPeneliti") {
    include "../peneliti/dataPeneliti.php";
} elseif ($_GET["menu"] == "dataKelinci") {
    include "../kelinci/dataKelinci.php";
} elseif ($_GET["menu"] == "kelinci") {
    include "../kelinci/kelinci.php";
} elseif ($_GET["menu"] == "diagramKelinci") {
    include "../kelinci/diagramKelinci.php";
} elseif ($_GET["menu"] == "karkas") {
    include "../kelinci/karkas.php";
} elseif ($_GET["menu"] == "data") {
    include "eksport_import.php";
} elseif ($_GET["menu"] == "hapusAdmin" || $_GET["menu"] == "hapusPeneliti" || $_GET["menu"] == "hapusKelinci" || $_GET["menu"] == "hapusBangsa" || $_GET["menu"] == "hapusKarkas") {
    include "hapus.php";
} else {
    echo "404 Error Not Found";
}



require_once '../assets/templates/footer.php';
