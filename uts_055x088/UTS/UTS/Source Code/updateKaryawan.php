<?php
    include('navbar.php');
?>

<form action="prosesKaryawan.php" method="POST">
    <section class="h-100 mt-3">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card m-3 shadow">
                        <div class="card-body p-5">
                            <h1 class="fs-2 card-title fw-bold mb-4 text-center">Update Profile</h1>
                            <form action="prosesMahasiswa.php" method="POST">

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        placeholder="NIK" name="nik"/>
                                    <label for="nik">NIK</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"
                                        placeholder="Nama" name="nama"/>
                                    <label for="nama">Nama</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-control" name="bidang" id="bidang">
                                        <option selected>Bidang</option>
                                        <option value="001">Front Office</option>
                                        <option value="002">Keuangan</option>
                                        <option value="003">Kemahasiswaan</option>
                                        <option value="004">Sarana & Prasarana</option>
                                        <option value="005">Satpam</option>
                                        <option value="006">Cleaning Service</option>
                                    </select>
                                    <label for="bidang">Bidang</label>
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
                                        placeholder="Alamat" name="alamat"/>
                                    <label for="alamat">Alamat</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        placeholder="No HP" name="nohp"/>
                                    <label for="nohp">No HP</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control"
                                        placeholder="Email" name="email"/>
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