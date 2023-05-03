<?php

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "UPDATE karyawan SET 
        nama_krwn = '$nama',
        bidang = '$bidang',
        gender = '$jk',
        alamat = '$alamat',
        no_hp = '$nohp',
        email = '$email'
        WHERE nik = '$nik'
    ";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil diperbaharui'); window.location = 'karyawan.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>