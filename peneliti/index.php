<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['role_id'])) {
    echo "<script>
            alert('Silahkan login kembali!');
            document.location.href = '../login.php';
        </script>";
} elseif (isset($_SESSION['role_id'])) {
    if ($_SESSION['role_id'] == "admin") {
        header("Location: ../admin/index.php?menu=dashboard");
    }
}



require_once '../functions.php';
require_once '../assets/templates/header.php';
require_once '../assets/templates/sidebar.php';


if ($_GET["menu"] == "dashboard") {
    include "../admin/dashboard.php";
} elseif ($_GET["menu"] == "dataPeneliti") {
    include "dataPeneliti.php";
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
