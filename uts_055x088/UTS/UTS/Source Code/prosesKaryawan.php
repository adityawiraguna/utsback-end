<?php

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "INSERT INTO karyawan VALUES (
        '$nik', '$nama', '$bidang', '$jk', '$alamat', '$nohp', '$email'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location = 'karyawan.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>