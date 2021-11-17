<?php
require 'function.php';


//query
$result = mysqli_query($conn,"SELECT * FROM buku");

if(isset($_POST["cari"])){
    $buku = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>> php 2</title>
</head>
<body>
    <h1><center>Daftar Siswa</center></h1>

 
    <a href="add.php">tambah data</a>
    <br>
   <form action="" method="post">
       <input type="text" name="keyword" autofocus placeholder="masukan kata" autocomplete="off">
       <button type="submit" name="cari">Pencarian</button>
   </form>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>id siswa</th>
            <th>nis</th>
            <th>nama siswa</th>
            <th>jenis kelamin</th>
            <th>alamat</th>
            <th>jurusan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td></td>
            <td>
                <a href= "update.php?id=<?=$row ["id"];?>">ubah  </a>/
                <a href="delete.php?id=<?=$row ["id"]; ?>">hapus</a>
            </td>
            <td><?= $row["id_siswa"]; ?></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["id_jurusan"]; ?></td>
        </tr>
        <?php endwhile; ?>


    </table>


</body>
</html>