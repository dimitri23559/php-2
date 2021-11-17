<?php
//mengoneksi
$conn = mysqli_connect("localhost", "root", "", "php-2");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $nis   = htmlspecialchars($data["nis"]);
    $nama_siswa = htmlspecialchars($data["nama_siswa"]); 
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $alamat = htmlspecialchars($data["alamat"]); 
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);

    $query = "INSERT INTO buku
                VALUES
                ('','id_siswa','$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$id_jurusan')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapus ($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $nis   = htmlspecialchars($data["nis"]);
    $nama_siswa = htmlspecialchars($data["nama_siswa"]); 
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $alamat = htmlspecialchars($data["alamat"]); 
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);


    $query = "UPDATE buku SET
                            id_jurusan = '$id_jurusan',
                            nis = '$nis',
                            nama_siswa = '$nama_siswa',
                            jenis_kelamin = '$jenis_kelamin',
                            alamat = $alamat
                WHERE
                            id = $id
                ";
                

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM result
                WHERE
                nama_siswa LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                jenis_kelamin LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                id_jurusan LIKE '%$keyword%'
                ";
    return query($query);
}

?>