<?php
if (!isset($_GET['id'])) {
	echo "<script>
            alert('Silahkan pilih data yang akan di hapus!');
            document.location.href = 'index.php?menu=dataAdmin';
        </script>";
}

function _hapusKelinci()
{
	$id = $_GET["id"];
	$jenis = $_GET["jenis"];
	if (hapusKelinci($id, $jenis) < 0) {
		echo "
			<script>
				alert('Data kelinci gagal dihapus!');
				document.location.href = 'index.php?menu=dataKelinci&jenis=$jenis';
			</script> ";
	}
}

if (isset($_GET['aksi'])) {
	if ($_GET['aksi'] == 'hapusAdmin') {
		$id = $_GET["id"];

		if (hapusAdmin($id) > 0) {
			echo "
		<script>
			alert('Admin berhasil dihapus!');
			document.location.href = 'index.php?menu=dataAdmin';
		</script>
	";
		} else {
			echo "
		<script>
			alert('Admin gagal dihapus!');
			document.location.href = 'index.php?menu=dataAdmin';
		</script>
	";
		}
	} elseif ($_GET['aksi'] == 'hapusPeneliti') {
		$id = $_GET["id"];

		if (hapusPeneliti($id) > 0) {
			echo "
		<script>
			alert('Penliti berhasil dihapus!');
			document.location.href = 'index.php?menu=dataPeneliti';
		</script>
	";
		} else {
			echo "
		<script>
			alert('Penliti gagal dihapus!');
			document.location.href = 'index.php?menu=dataPeneliti';
		</script>
	";
		}
	} elseif ($_GET['aksi'] == 'hapusBangsa') {
		$id = $_GET["id"];

		if (hapusBangsa($id) > 0) {
			echo "
		<script>
			alert('Data berhasil dihapus!');
			document.location.href = 'index.php?menu=bangsaKelinci';
		</script>
	";
		} else {
			echo "
		<script>
			alert('Data gagal dihapus!');
			document.location.href = 'index.php?menu=bangsaKelinci';
		</script>
	";
		}
	} elseif ($_GET['aksi'] == 'hapusKarkas') {
		$id = $_GET["id"];

		if (hapusKarkas($id) > 0) {
			echo "
		<script>
			alert('Data Perpotongan berhasil dihapus!');
			document.location.href = 'index.php?menu=karkas';
		</script>
	";
		} else {
			echo "
		<script>
			alert('Data Perpotongan gagal dihapus!');
			document.location.href = 'index.php?menu=karkas';
		</script>
	";
		}
	}
}


// Kelinci
if (isset($_GET['jenis'])) {
	if ($_GET['jenis'] == 'hycole') {
		_hapusKelinci();
	} elseif ($_GET['jenis'] == 'hyla') {
		_hapusKelinci();
	} elseif ($_GET['jenis'] == 'nzw') {
		_hapusKelinci();
	} elseif ($_GET['jenis'] == 'reksi') {
		_hapusKelinci();
	} elseif ($_GET['jenis'] == 'reza') {
		_hapusKelinci();
	} elseif ($_GET['jenis'] == 'satin') {
		_hapusKelinci();
	} else {
		echo "
		<script>
			document.location.href = 'index.php?menu=kelinci';
		</script>
		";
	}
}
