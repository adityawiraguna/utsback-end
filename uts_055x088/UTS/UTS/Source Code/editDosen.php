<?php
$nid = $_GET['nid'];
include 'koneksi.php';

$qry = "SELECT * FROM dosen WHERE nid = '$nid'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

<?php
    include('navbar.php');
?>

<form action="updateDosenBckn.php" method="POST">
    <section class="h-100 mt-3">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card m-3 shadow">
                        <div class="card-body p-5">
                            <h1 class="fs-2 card-title fw-bold mb-4 text-center">Edit Profile</h1>
                            <form action="prosesMahasiswa.php" method="POST">

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        placeholder="NID" name="nid" value="<?= $data['nid']?>" readonly/>
                                    <label for="nid">NID</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"
                                        placeholder="Nama" name="nama" value="<?= $data['nama_dsn']?>"/>
                                    <label for="nama">Nama</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="1">Laki-Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="textarea" class="form-control"
                                        placeholder="Alamat" name="alamat" value="<?= $data['alamat']?>"/>
                                    <label for="alamat">Alamat</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        placeholder="No HP" name="nohp" value="<?= $data['no_hp']?>"/>
                                    <label for="nohp">No HP</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control"
                                        placeholder="Email" name="email" value="<?= $data['email']?>"/>
                                    <label for="email">Email</label>
                                </div>

                                <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>