<?php
    include('navbar.php');
?>

<section class="h-100 mt-3">
    <div class="container h-100">
        <div class="card m-3 shadow">
            <h3 class="fs-2 card-title fw-bold mb-4 text-center"><br>Data UKM</h3>
                <div class="m-4">
                <a href="updateUkm.php"><button class="btn fw-bold btn-outline-success fs-5">Tambah Data</button></a>
                <br><br>
                    <table class='table text-center'>
                        <thead>
                            <tr>
                                <th scope='col'>NIU</th>
                                <th scope='col'>Nama UKM</th>
                                <th scope='col'>Bagian</th>
                                <th scope='col'>Ketua</th>
                                <th scope='col'>Kontak</th>
                                <th scope='col'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "koneksi.php";
                                $qry = "SELECT * FROM ukm";
                                $exec = mysqli_query($con, $qry);
                                while($data = mysqli_fetch_assoc($exec)){ 
                            ?>
                            <tr>
                                <td scope='row'><?= $data['niu'] ?></td>
                                <td scope='row'><?= $data['nama_ukm'] ?></td>
                                <td scope='row'><?php $data['bagian']; 
                                    switch ($data['bagian']) {
                                        case "001":
                                            echo "Akademik";
                                            break;
                                        case "002":
                                            echo "Minat dan Bakat";
                                            break;
                                        case "003":
                                            echo "Kesejahteraan Mahasiswa";
                                            break;
                                        case "004":
                                            echo "Sosial";
                                            break;
                                        }
                                ?></td>
                                <td scope='row'><?= $data['ketua'] ?></td>
                                <td scope='row'><?= $data['kontak'] ?></td>
                                <td scope='row'>        
                                    <a href="editUkm.php?niu=<?= $data['niu'] ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                                    <a href="deleteUkm.php?niu=<?= $data['niu'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>