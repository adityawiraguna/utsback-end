<?php

    $niu = $_POST['niu'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];
    $ketua = $_POST['ketua'];
    $kontak = $_POST['kontak'];

    include "koneksi.php";

    $qry = "INSERT INTO ukm VALUES (
        '$niu', '$nama', '$bagian', '$ketua', '$kontak'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location = 'ukm.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>