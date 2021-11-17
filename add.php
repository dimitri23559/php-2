<?php

require 'function.php';

if (isset($_POST["submit"])) {
    
if (tambah($_POST) > 0) {
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>tambah data</h1>
     <form action="" method="post">

        <ul>
            <li>
                <label for="nis">NIS:</label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="nama_siswa">Nama:</label>
                <input type="text" name="nama_siswa" id="nama_siswa">
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin">
            </li>
            <li>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="id_jurusan">Jurusan:</label>
                <input type="text" name="id_jurusan" id="id_jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
        </form>
</body>
</html>