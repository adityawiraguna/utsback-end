<?php

    $nid = $_POST['nid'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "UPDATE dosen SET 
        nama_dsn = '$nama',
        gender = '$jk',
        alamat = '$alamat',
        no_hp = '$nohp',
        email = '$email'
        WHERE nid = '$nid'
    ";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil diperbaharui'); window.location = 'dosen.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>