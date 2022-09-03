<?php
require 'connection/connect.php';
require 'functions/functions.php';
require_once 'vendor/autoload.php';

// Faker Factory
$faker = new Faker\Generator();
$faker->addProvider(new Faker\Provider\id_ID\Person($faker));
$faker->addProvider(new Faker\Provider\id_ID\Address($faker));
$faker->addProvider(new Faker\Provider\id_ID\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\id_ID\Company($faker));
$faker->addProvider(new Faker\Provider\Lorem($faker));
$faker->addProvider(new Faker\Provider\Internet($faker));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafi & Suken Company</title>

    <!-- Link My CSS -->
    <link rel="stylesheet" href="assets\css\style.css">

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="assets\bootstrap-5.2.0-dist\css\bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Link Font Awesome -->
    <!-- <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="assets\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="assets\fontawesome\css\fontawesome.min.css">
    <link rel="stylesheet" href="assets\fontawesome\css\solid.min.css">

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
</head>

<body class="body p-2">
    <audio hidden autoplay loop> 
        <source src="assets\audio\Turugamingprohdplusultramax.mp3" type="audio/mpeg">
    </audio>

    <marquee behavior="alternate" direction="" class="neon mb-3"><h1>DAFTAR SISWA XII RPL 3</h1></marquee>

    <!-- Tambah Karyawan Link -->
    <!-- <a href="php/tambahKaryawan.php" class="btn btn-success mb-3" role="button">Tambah</a> -->

    <form method="POST" class="mb-3">
        <!-- Tombol Trigger Modal Tambah Karyawan -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Karyawan
        </button>

        <input class="form-control w-25 me-1 d-inline float-right" width="30" type="search" autofocus placeholder="Cari.." autocomplete="off" id="keyword" name="keyword">
        <!-- <button class="btn btn-outline-success" name="cari" id="tombol-cari" type="submit">Search</button> -->
    </form>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#121f40 ;">
                    <h5 class="modal-title text-light" id="staticBackdropLabel">Tambah Karyawan</h5>
                    <button type="button" class="btn-close" style="background-color: white;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="php\tambahKaryawan.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nik" class="form-label mt-2">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" required>
                            </div>
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label mt-2">JK</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option disabled selected> Pilih </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="">
                                <label for="nama" class="form-label mt-2">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <label for="no_hp" class="form-label mt-2">No HP</label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp" required>
                            </div>
                            <div class="col-md-6">
                                <label for="usia" class="form-label mt-2">Usia</label>
                                <input type="number" class="form-control" name="usia" id="usia" required>
                            </div>
                        </div>
    
                        <div class="">
                            <label for="email" class="form-label  mt-2">Email</label>
                            <input type="text" class="form-control" name="email" id="email" required>
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <label for="agama" class="form-label mt-2">Agama</label>
                                <select class="form-control" name="agama" id="agama">
                                    <option disabled selected> Pilih </option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="jabatan" class="form-label mt-2">Jabatan</label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option disabled selected> Pilih </option>
                                    <option value="CEO">CEO</option>
                                    <option value="Direktur">Direktur</option>
                                    <option value="Manajer">Manajer</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>
                            
                        </div>
    
                        
                        <div class="mb-1">
                            <label for="alamat" class="form-label mt-2">Alamat</label>
                            <input type="textarea" class="form-control" name="alamat" id="alamat" required>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: #121f40 ;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <div id="container1" class="mt-4">
        <table class="table table-dark table-striped table-hover" cellpadding="15" cellspacing="0">
            <thead>
                <tr class="table-dark" style="background: #000;">
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">JK</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = 'SELECT * FROM karyawan';
            $result = $conn->query($sql);
            $no = 1;

            if ($result->num_rows > 0) {
                while ($data = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nik'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['jenis_kelamin'] ?></td>
                        <td><?= $data['no_hp'] ?></td>
                        <td><?= $data['usia'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['agama'] ?></td>
                        <td><?= $data['jabatan'] ?></td>
                        <td>
                            <a href="php/ubahKaryawan.php?id_karyawan=<?= $data[
                                'id_karyawan'
                            ] ?>" class="btn btn-warning-dark"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                            <a href="php/hapusKaryawan.php?id_karyawan=<?= $data[
                                'id_karyawan'
                            ] ?>" onclick="return confirm('yakin?')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
            } else {
                echo '0 results';
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Link Search Script -->
    <script src="js/searchKaryawan.js"></script>
</body>
</html>

