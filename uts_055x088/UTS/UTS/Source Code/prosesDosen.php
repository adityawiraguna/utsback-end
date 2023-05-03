<?php

    $nid = $_POST['nid'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "INSERT INTO dosen VALUES (
        '$nid', '$nama', '$jk', '$alamat', '$nohp', '$email'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location = 'dosen.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>