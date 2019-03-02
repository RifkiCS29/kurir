<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$nama	 		= mysqli_real_escape_string($db,$_POST['nama_pelanggan']);
	$username		= mysqli_real_escape_string($db,$_POST['username_pelanggan']);
	$password   	= mysqli_real_escape_string($db,sha1($_POST['password']));
	$tanggal 		= mysqli_real_escape_string($db,$_POST['tanggal_lahir']);
	$alamat			= mysqli_real_escape_string($db,$_POST['alamat_pelanggan']);
	$no_hp		   	= mysqli_real_escape_string($db,$_POST['no_hp_pelanggan']);
	
	$nama_file_lengkap 		= $_FILES['gambar']['name'];
	$nama_file 		= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file		= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 		= $_FILES['gambar']['type'];
	$ukuran_file 	= $_FILES['gambar']['size'];
	$tmp_file 		= $_FILES['gambar']['tmp_name'];
	
	
	if (!($nama=='') and !($username=='') and !($password=='') and !($tanggal=='') and !($alamat=='') and !($no_hp=='') and
		($tipe_file == "image/jpeg" || $tipe_file == "image/jpg" || $tipe_file == "image/png") and ($ukuran_file <= 2100000)){		
		
		$nama_baru = $username . $ext_file;
		$path = "../images/".$nama_baru;
		move_uploaded_file($tmp_file, $path);
		
		$sql = "INSERT INTO tb_pelanggan(nama_pelanggan, username_pelanggan, password, tanggal_lahir, alamat_pelanggan, no_hp_pelanggan, gambar)
				values ('$nama', '$username', '$password', '$tanggal', '$alamat', '$no_hp', '$nama_baru')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2><br>Terima Kasih<br>Silahkan Login Untuk Menggunakan Fitur e-Kurir</h2></center>
			<meta http-equiv='refresh' content='2;url=../../../kurir'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
			<meta http-equiv='refresh' content='2;url=../daftar'>";
	}
	
?>
	