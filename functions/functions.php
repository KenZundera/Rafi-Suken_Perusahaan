<?php

// Koneksi Ke Database
$conn = mysqli_connect('localhost', 'root', '', 'perusahaan');

function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function hapusKaryawan($id_karyawan)
{
    global $conn;
    mysqli_query(
        $conn,
        "DELETE FROM karyawan WHERE id_karyawan = '$id_karyawan'"
    );

    return mysqli_affected_rows($conn);
}

function tambahKaryawan($data)
{
    global $conn;

    $nik = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $usia = htmlspecialchars($data['usia']);
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);
    $agama = htmlspecialchars($data['agama']);
    $jabatan = htmlspecialchars($data['jabatan']);

    $sql = "INSERT INTO karyawan (id_karyawan, nik, nama, jenis_kelamin, no_hp, usia, email, alamat, agama, jabatan) VALUES ('', '$nik', '$nama', '$jenis_kelamin', '$no_hp', '$usia', '$email', '$alamat', '$agama', '$jabatan')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function ubahKaryawan($data)
{
    global $conn;

    $id_karyawan = $data['id_karyawan'];
    $nik = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $usia = htmlspecialchars($data['usia']);
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);
    $agama = htmlspecialchars($data['agama']);
    $jabatan = htmlspecialchars($data['jabatan']);

    $sql = "UPDATE karyawan SET
                nik = '$nik',
                nama = '$nama',
                jenis_kelamin = '$jenis_kelamin',
                no_hp = '$no_hp',
                usia = '$usia',
                email = '$email',
                alamat = '$alamat', 
                agama = '$agama',
                jabatan = '$jabatan'
            WHERE id_karyawan = '$id_karyawan'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
?>
