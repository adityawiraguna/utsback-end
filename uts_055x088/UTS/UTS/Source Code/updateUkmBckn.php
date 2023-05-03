<?php

    $niu = $_POST['niu'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];
    $ketua = $_POST['ketua'];
    $kontak = $_POST['kontak'];

    include "koneksi.php";

    $qry = "UPDATE ukm SET 
        nama_ukm = '$nama',
        bagian = '$bagian',
        ketua = '$ketua',
        kontak = '$kontak'
        WHERE niu = '$niu'
    ";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil diperbaharui'); window.location = 'ukm.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>