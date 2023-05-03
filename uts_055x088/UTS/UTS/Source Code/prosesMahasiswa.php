<?php

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "INSERT INTO mahasiswa VALUES (
        '$nim', '$nama', '$jurusan', '$jk', '$alamat', '$nohp', '$email'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location = 'mahasiswa.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>