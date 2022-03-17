<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
$koneksi = mysqli_connect("localhost","root","","dbkp");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang dikirim dari form login
$uname = $_POST['uname'];
$pass = $_POST['pass'];


// menyeleksi data user dengan uname dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from mahasiswa where uname='$uname' and pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah uname dan password di temukan pada database
if($cek > 0){


	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai mahasiswa
	if($data['level']=="mahasiswa"){

		// buat session login dan uname
		$_SESSION['id_mahasiswa'] = $data['id_mahasiswa'];
		$_SESSION['uname'] = $data['uname'];
		$_SESSION['level'] = $data['level'];
		$_SESSION['nis'] = $data['nis'];
		$_SESSION['namamahasiswa'] = $data['namamahasiswa'];
		$_SESSION['kelas'] = $data['kelas'];
		$_SESSION['jurusan'] = $data['jurusan'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['nohp'] = $data['nohp'];
		// alihkan ke halaman dashboard mahasiswa
		header("location:biodata_mahasiswa.php");
	}else{


		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>