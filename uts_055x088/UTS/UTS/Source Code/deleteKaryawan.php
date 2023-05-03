<?php

    $nik = $_GET['nik'];

    include "koneksi.php";

    $qry = "DELETE FROM karyawan WHERE nik = '$nik'";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil dihapus'); window.location = 'karyawan.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>