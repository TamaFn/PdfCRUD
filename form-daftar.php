<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section class="vh-full p-5" style="background-color: #2779e2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class="text-white mb-4 text-center">Masukkan Biodata Anda</h1>

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form class="w-full" action="proses-pendaftaran.php" method="POST">
                                <fieldset>
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Nomor Siswa</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="nis" class="form-control form-control-lg" placeholder="" require />

                                        </div>
                                    </div>
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Nama Lengkap</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="nama" class="form-control form-control-lg" placeholder="" require />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Jenis Kelamin</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <label><input type="radio" name="jenis_kelamin" value="laki-laki" require> Laki-laki</label>
                                            <label><input type="radio" name="jenis_kelamin" value="perempuan" require> Perempuan</label>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Nomor Telepon</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="nomor_telepon" class="form-control form-control-lg" placeholder="" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Alamat</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <textarea class="form-control" name="alamat" rows="3" placeholder=""></textarea>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Agama</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <select name="agama" class="col-md-9 pe-5">
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Atheis</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Sekolah Asal </h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="sekolah_asal" class="form-control form-control-lg placeholder=" nama sekolah" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Upload Photo</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" name='foto' type="file" />
                                            <div class="small text-muted mt-2">Upload Your Photo</div>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="px-5 py-4 d-flex justify-content-center gap-3">
                                        <button type="submit" value="Daftar" name="daftar" class="btn btn-primary btn-lg">Send application</button>
                                    </div>

                                    <hr class="mx-n3">


                                </fieldset>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>