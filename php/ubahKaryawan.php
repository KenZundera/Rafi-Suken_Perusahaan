<?php

require '..\functions\functions.php';

$id_karyawan = $_GET['id_karyawan'];
$peru = query("SELECT * FROM karyawan WHERE id_karyawan = $id_karyawan")[0];

if (isset($_POST['ubah'])) {
    if (ubahKaryawan($_POST) > 0) {
        echo "<script>
        	alert('data berhasil diubah!');
        	document.location.href = '../index.php';
        </script>";
    } else {
        echo "<script>
        	alert('data gagal diubah!');
        	document.location.href = '../index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Perusahaan</title>

	<!-- link css -->
	<link rel="stylesheet" href="../assets/style/style.css">

	<!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>
</head>
<body>
	<audio hidden > 
        <source src="" type="audio/mpeg">
    </audio>

	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<header class="cf">
						<h1>Ubah Data</h1>
					</header>
					<form action="" method="post">
							<input type="hidden" id="id_karyawan" name="id_karyawan" value="<?= $peru[
           'id_karyawan'
       ] ?>">
       <div class="mb-3">
								<label for="nik" class="form-label">NIK</label>
								<input type="text" class="form-control" name="nik" id="nik" value="<?= $peru[
            'nik'
        ] ?>">
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">Nama</label>
								<input type="text" class="form-control" name="nama" id="nama" value="<?= $peru[
            'nama'
        ] ?>">
							</div>
							<div class="mb-3">
								<label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
								<input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= $peru[
            'jenis_kelamin'
        ] ?>">
							</div>
							<div class="mb-3">
								<label for="no_hp" class="form-label">No. Hp</label>
								<input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $peru[
            'no_hp'
        ] ?>">
							</div>

                            
							<div class="mb-3">
                                <label for="usia" class="form-label">Usia</label>
								<input type="text" class="form-control" name="usia" id="usia" value="<?= $peru[
            'usia'
        ] ?>">
							</div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
								<input type="text" class="form-control" name="email" id="email" value="<?= $peru[
            'email'
        ] ?>">
							</div>
                            
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $peru[
                                    'alamat'
                                ] ?>">
                            </div>

							<div class="mb-3">
								<label for="agama" class="form-label">Agama</label>
								<input type="text" class="form-control" name="agama" id="agama" value="<?= $peru[
            'agama'
        ] ?>">
							</div>

							<div class="mb-3">
								<label for="jabatan" class="form-label">Jabatan</label>
								<input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $peru[
            'jabatan'
        ] ?>">
							</div>
								
							<div class="mb-3">
								<button type="reset" class="btn btn-warning">Reset</button>
									<button type="submit" class="btn btn-success" name="ubah">Ubah</button>
									<a href="../index.php">
										<button type="button" class="btn btn-danger">Batal</button>
									</a>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
