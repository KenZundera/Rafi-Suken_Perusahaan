<?php
require '../functions/functions.php';

if (isset($_POST['tambah'])) {
    if (tambahKaryawan($_POST) > 0) {
        echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = '../index.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = '../index.php';
			  </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Buku</title>
	
	<!-- untuk css -->
	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>
</head>
<body>
	<audio hidden autoplay loop> 
        <source src="../assets/audio/omaga.mp3" type="audio/mpeg">
    </audio>
	
	<div class="wrap">
        <div class="container p-4">
            <div class="row">
                <div class="col-8">
                    <header class="cf">
                        <h1>Tambah Data</h1>
		            </header>
	<form action="" method="post">

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" name="nik" id="nik" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" required>
        </div>

        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="text" class="form-control" name="usia" id="usia" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" name="agama" id="agama" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" required>
        </div>

        <div class="mb-3">
								<button type="reset" class="btn btn-warning">Reset</button>
									<button type="submit" class="btn btn-success" name="tambah">Tambah Data</button>
									<a href="../index.php">
										<button type="button" class="btn btn-danger">Batal</button>
									</a>
							</div>
			
	</form>
                </div>
            </div>
        </div>
		

	 <!-- Link Jquery -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>