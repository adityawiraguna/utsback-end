<?php

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "UPDATE mahasiswa SET 
        nama_mhs = '$nama',
        kode_jurusan = '$jurusan',
        gender = '$jk',
        alamat = '$alamat',
        no_hp = '$nohp',
        email = '$email'
        WHERE nim = '$nim'
    ";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil diperbaharui'); window.location = 'mahasiswa.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>