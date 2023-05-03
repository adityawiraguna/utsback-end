<?php
    include('navbar.php');
?>

<section class="h-100 mt-3">
    <div class="container h-100">
        <div class="card m-3 shadow">
            <h3 class="fs-2 card-title fw-bold mb-4 text-center"><br>Data Dosen</h3>
                <div class="m-4">
                <a href="updateDosen.php"><button class="btn fw-bold btn-outline-success fs-5">Tambah Data</button></a>
                <br><br>
                    <table class='table text-center'>
                        <thead>
                            <tr>
                                <th scope='col'>NID</th>
                                <th scope='col'>Nama Dosen</th>
                                <th scope='col'>Jenis Kelamin</th>
                                <th scope='col'>Alamat</th>
                                <th scope='col'>No HP</th>
                                <th scope='col'>Email</th>
                                <th scope='col'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include "koneksi.php";
                            $qry = "SELECT * FROM dosen";
                            $exec = mysqli_query($con, $qry);
                            while($data = mysqli_fetch_assoc($exec)){ 
                        ?>
                        <tr>
                            <td scope='row'><?= $data['nid'] ?></td>
                            <td scope='row'><?= $data['nama_dsn'] ?></td>
                            <td scope='row'><?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
                            <td scope='row'><?= $data['alamat'] ?></td>
                            <td scope='row'><?= $data['no_hp'] ?></td>
                            <td scope='row'><?= $data['email'] ?></td>
                            <td scope='row'>        
                                <a href="editDosen.php?nid=<?= $data['nid'] ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                                <a href="deleteDosen.php?nid=<?= $data['nid'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>