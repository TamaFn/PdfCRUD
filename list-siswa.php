<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-3xl font-bold mb-4">Data Siswa</h1>
    <nav>
        <a href="form-daftar.php" class="bg-blue-500 text-white py-2 px-4 rounded inline-block mb-4">Tambah Baru</a>
    </nav>

    <br>

    <table class="w-full border-collapse border">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">No</th>
                <th class="py-2 px-4 border">Foto</th>
                <th class="py-2 px-4 border">Nis</th>
                <th class="py-2 px-4 border">Nama</th>
                <th class="py-2 px-4 border">Jenis Kelamin</th>
                <th class="py-2 px-4 border">No Telepon</th>
                <th class="py-2 px-4 border">Alamat</th>
                <th class="py-2 px-4 border">Agama</th>
                <th class="py-2 px-4 border">Sekolah Asal</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr class='border'>";
                echo "<td class='py-2 px-4 border'>" . $siswa['id'] . "</td>";
                echo "<td><img src='img/" . $siswa['foto'] . "' width='100' height='100'></td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['nis'] . "</td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['nama'] . "</td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['telp'] . "</td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['alamat'] . "</td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['agama'] . "</td>";
                echo "<td class='py-2 px-4 border'>" . $siswa['sekolah_asal'] . "</td>";
                // echo "<td class='py-2 px-4 border'>" . $siswa['foto'] . "</td>";


                echo "<td>";
                echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>