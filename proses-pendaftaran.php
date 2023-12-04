<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tlp = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    $foto = $_POST['foto'];

    // buat query
    $sql = "INSERT INTO calon_siswa (nis, nama, jenis_kelamin, telp, alamat, agama, sekolah_asal, foto) VALUE 
    ('$nis','$nama', '$jk', '$tlp', '$alamat', '$agama', '$sekolah','$foto')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
