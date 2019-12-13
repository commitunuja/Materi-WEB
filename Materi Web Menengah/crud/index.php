<?php
//memanggil file php
require_once 'koneksi.php';

//mysql_query("varibel koneksi","kode sql")
$jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");

$semester = mysqli_query($koneksi, "SELECT * FROM semester");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>

<body>
    <H3>Halaman Mahasiswa</H3>
    <form method="POST">
        <input type="number" name="nim" placeholder="Masukan Nim"><br>
        <input type="text" name="nama" placeholder="Masukan Nama"><br>
        <textarea name="alamat" rows="5" placeholder="Masukan Alamat"></textarea><br>
        <select name="jurusan">
            <?php

            if (mysqli_num_rows($jurusan) > 0) {
                while ($tampil = mysqli_fetch_array($jurusan)) {
                    ?>
                    <option value="<?= $tampil['id_jurusan'] ?>"><?= $tampil['nama_jurusan'] ?></option>
            <?php
                }
            } else {
                echo '<option value="">--tidak ada--</option>';
            }

            ?>

        </select>
        <br>
        <select name="semester">
            <?php
            while ($tampil_1 = mysqli_fetch_array($semester)) {
                echo '
                <option value=' . $tampil_1['id_semester'] . '>' . "Semester " . $tampil_1['nama_semester'] . '</option>
                ';
            }
            ?>
        </select>
        <br>
        <button type="submit" name="tambah">Simpan</button>
    </form>
</body>

</html>


<?php

if (isset($_POST['tambah'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];
    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim,nama,alamat,jurusan,semester) VALUES ('$nim','$nama','$alamat','$jurusan','$semester')");
    if ($simpan) {
        echo "<script>alert('BERHASIL SIMPAN')</script>";
        exit();
    } else {
        echo "<script>alert('GAGAL SIMPAN')</script>";
    }
} else {
    echo "gagal proses";
}



?>