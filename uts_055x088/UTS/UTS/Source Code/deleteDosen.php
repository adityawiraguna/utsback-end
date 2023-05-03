<?php

    $nid = $_GET['nid'];

    include "koneksi.php";

    $qry = "DELETE FROM dosen WHERE nid = '$nid'";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil dihapus'); window.location = 'dosen.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>