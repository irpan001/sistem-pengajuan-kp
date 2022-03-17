<?php 
$conn = mysqli_connect("localhost", "root", "", "dbkp");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function addmahasiswa($data) {
	global $conn;

	$nis = $_POST["nis"];
    $namamahasiswa = $_POST["namamahasiswa"];
    $kelas = $_POST["kelas"];
	$jurusan = $_POST["jurusan"];
	$email = $_POST["email"];	
	$nohp = $_POST["nohp"];
	$uname = $_POST["uname"];
	$pass = $_POST["pass"];
	$level = $_POST["level"];



	// query addkp
	include 'koneksi.php';
	$query = "INSERT INTO mahasiswa 
				VALUES
			 ('', '$nis', '$namamahasiswa', '$kelas', '$jurusan', '$email', '$nohp', '$uname', '$pass', '$level') ";
			 mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapusmahasiswa($id_mahasiswa) {

	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa");
	return mysqli_affected_rows($conn);
}

 ?>