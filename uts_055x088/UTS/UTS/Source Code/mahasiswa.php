<?php
    include('navbar.php');
?>

<section class="h-100 mt-3">
    <div class="container h-100">
        <div class="card m-3 shadow">
            <h3 class="fs-2 card-title fw-bold mb-4 text-center"><br>Data Mahasiswa</h3>
                <div class="m-4">
                <a href="updateMahasiswa.php"><button class="btn fw-bold btn-outline-success fs-5">Tambah Data</button></a>
                <br><br>
                    <table class='table text-center'>
                        <thead>
                            <tr>
                                <th scope='col'>NIM</th>
                                <th scope='col'>Nama Mahasiswa</th>
                                <th scope='col'>Jurusan</th>
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
                                $qry = "SELECT * FROM mahasiswa";
                                $exec = mysqli_query($con, $qry);
                                while($data = mysqli_fetch_assoc($exec)){ 
                            ?>
                            <tr>
                                <td scope='row'><?= $data['nim'] ?></td>
                                <td scope='row'><?= $data['nama_mhs'] ?></td>
                                <td scope='row'><?php $data['kode_jurusan']; 
                                    switch ($data['kode_jurusan']) {
                                        case "001":
                                            echo "Sistem Komputer";
                                            break;
                                        case "002":
                                            echo "Sistem Informasi";
                                            break;
                                        case "003":
                                            echo "Bisnis Digital";
                                            break;
                                        case "004":
                                            echo "Teknologi Informasi";
                                            break;
                                        }
                                ?></td>
                                <td scope='row'><?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
                                <td scope='row'><?= $data['alamat'] ?></td>
                                <td scope='row'><?= $data['no_hp'] ?></td>
                                <td scope='row'><?= $data['email'] ?></td>
                                <td scope='row'>        
                                    <a href="editMahasiswa.php?nim=<?= $data['nim'] ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                                    <a href="deleteMahasiswa.php?nim=<?= $data['nim'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>