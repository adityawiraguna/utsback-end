<?php
$niu = $_GET['niu'];
include 'koneksi.php';

$qry = "SELECT * FROM ukm WHERE niu = '$niu'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>

<?php
    include('navbar.php');
?>

<form action="updateUkmBckn.php" method="POST">
    <section class="h-100 mt-3">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card m-3 shadow">
                        <div class="card-body p-5">
                            <h1 class="fs-2 card-title fw-bold mb-4 text-center">Edit Profile</h1>
                            <form action="prosesUkm.php" method="POST">

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        placeholder="NIU" name="niu" value="<?= $data['niu']?>" readonly/>
                                    <label for="niu">NIU</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"
                                        placeholder="Nama" name="nama" value="<?= $data['nama_ukm']?>"/>
                                    <label for="nama">Nama</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-control" name="bagian" id="bagian">
                                        <option selected>Bagian</option>
                                        <option value="001">Akademik</option>
                                        <option value="002">Minat dan Bakat</option>
                                        <option value="003">Kesejahteraan Mahasiswa</option>
                                        <option value="004">Sosial</option>
                                    </select>
                                    <label for="bagian">Bagian</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"
                                        placeholder="Ketua" name="ketua" value="<?= $data['ketua']?>"/>
                                    <label for="ketua">Ketua</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        placeholder="Kontak" name="kontak" value="<?= $data['kontak']?>"/>
                                    <label for="kontak">Kontak</label>
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
