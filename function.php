<?php 
$conn = mysqli_connect("localhost", "root", "", "dbkp");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($data = mysqli_fetch_assoc($result)) {
		$rows[] = $data;
	}
	return $rows;
}

function addkp($data) {
	global $conn;

	$nis = $_SESSION["nis"];
    $namamahasiswa = $_SESSION["namamahasiswa"];
    $kelas = $_SESSION["kelas"];
	$jurusan = $_SESSION["jurusan"];
	$pembimbing = $data["pembimbing"];	
	$tanggalmulai = $data["tanggalmulai"];
	$judulkp = $data["judulkp"];

	//upload pdf
	$pdf = upload();
	if( !$pdf ) {
		return false;
		
	}

	$id_mahasiswa = $_SESSION["id_mahasiswa"];
	$status = $_POST["status"];
	$ulasan = $_POST["ulasan"];



	// query addkp
	$query = "INSERT INTO kp 
				VALUES
			 ('', '$nis', '$namamahasiswa', '$kelas', '$jurusan', '$pembimbing', '$tanggalmulai', '$judulkp', '$pdf', '$id_mahasiswa', '$status', '$ulasan', 'lap_akhir' ) ";
			 mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function upload() {

	$namafile = $_FILES['pdf']['name'];
	$ukuranfile = $_FILES['pdf']['size'];
	$error = $_FILES['pdf']['error'];
	$tmpname = $_FILES['pdf']['tmp_name'];

	// cek apakah tidak ada gambar diupload
	if ($error === 4) {
		echo "<script>
				alert('pilih pdfnya')
				</script>";
		return false;
	}

	// cek apakah yang di upload adalah pdf
	$ekstensipdfvalid = ['pdf'];
	$ekstensipdf = explode('.', $namafile);
	$ekstensipdf = strtolower(end( $ekstensipdf ) );

	if (!in_array($ekstensipdf, $ekstensipdfvalid)) {
		echo "<script>
				alert('yang anda upload bukan pdf')
				</script>";
		return false;
	}

	// cek ukuran terlalu besar

	if ($ukuranfile > 3000000) {
		echo "<script>
				alert('ukurannya terlalu besar')
				</script>";
		return false;
	}
	//lolos pengecekan dan siap diupload
	// generate nama pdf baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensipdf;



	move_uploaded_file($tmpname, 'filepdf/'.$namafilebaru);
	return $namafilebaru;






}



function updatestatus($data){
	global $conn;

	$id_pengajuan = $data['id_pengajuan'];

	$status = $data["status"];
	$ulasan = $data["ulasan"];


	$query = "UPDATE kp SET status = '$status', ulasan = '$ulasan' WHERE id_pengajuan = $id_pengajuan";
	
	 mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);  






}

function hapuspengajuan($id_pengajuan) {

	global $conn;
	mysqli_query($conn, "DELETE FROM kp WHERE id_pengajuan = $id_pengajuan");
	return mysqli_affected_rows($conn);
}
function laporanakhir($data) {
$lap_akhir = upload();
	if( !$lap_akhir ) 
		return false;
}
 ?>