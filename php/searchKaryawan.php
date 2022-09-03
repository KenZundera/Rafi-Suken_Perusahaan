<?php
require '../connection/connect.php';

$keyword = $_GET['keyword'];

// fungsi ini untuk menjalankan fungsi live search pada database, statement ini tidak boleh dihapus supaya live search bekerja

$sql = "SELECT *
        FROM karyawan
        WHERE
            nik LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            jenis_kelamin LIKE '%$keyword%' OR
            no_hp LIKE '%$keyword%' OR
            usia LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%' OR
            agama LIKE '%$keyword%' OR
            jabatan LIKE '%$keyword%'";

$conn->query($sql);
?>
<?php if ($conn->affected_rows < 1): ?>
    <div class="alert alert-danger mt-3" role="alert">
        Data tidak ditemukan
    </div>
<?php else: ?>
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
            $show = $conn->query($sql);
            $no = 1;
            while ($k = mysqli_fetch_array($show)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $k['nik'] ?></td>
                        <td><?= $k['nama'] ?></td>
                        <td><?= $k['jenis_kelamin'] ?></td>
                        <td><?= $k['no_hp'] ?></td>
                        <td><?= $k['usia'] ?></td>
                        <td><?= $k['alamat'] ?></td>
                        <td><?= $k['email'] ?></td>
                        <td><?= $k['agama'] ?></td>
                        <td><?= $k['jabatan'] ?></td>
                        <td>
                            <a href="php/ubahKaryawan.php?id_karyawan=<?= $k[
                                'id_karyawan'
                            ] ?>" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                            <a href="php/hapusKaryawan.php?id_karyawan=<?= $k[
                                'id_karyawan'
                            ] ?>" onclick="return confirm('yakin?')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
<?php endif; ?>
