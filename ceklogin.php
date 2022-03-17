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
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){


	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai mahasiswa
	if($data['level']=="admin"){
		// buat session login dan username

		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = $data['level'];
		$_SESSION['namaadmin'] = $data['namaadmin'];
		$_SESSION['nohp'] = $data['nohp'];
		$_SESSION['e-mail'] = $data['e-mail'];
			// alihkan ke halaman dashboard staff
		header("location:biodata_admin.php");


	}else{


		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>