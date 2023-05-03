<?php

    $niu = $_GET['niu'];

    include "koneksi.php";

    $qry = "DELETE FROM ukm WHERE niu = '$niu'";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil dihapus'); window.location = 'ukm.php';</script>";
    } else{
        echo "Data gagal disimpan";
    }
?>