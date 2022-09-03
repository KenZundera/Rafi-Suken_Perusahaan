<?php
require '..\functions\functions.php';

$id_karyawan = $_GET['id_karyawan'];

if (hapusKaryawan($id_karyawan) > 0) {
    echo "<script>
    		alert('data berhasil dihapus!');
    		document.location.href = '../index.php';
    	</script>";
} else {
    echo "<script>
    		alert('data gagal dihapus!');
    		document.location.href = '../index.php';
    	</script>";
}

?>
