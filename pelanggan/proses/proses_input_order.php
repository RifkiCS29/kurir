<?php
	session_start();
	include'../../koneksi/koneksi.php';
	$nama_brg 		= mysqli_real_escape_string($db,$_POST['nama_barang']);
	$alamat_asal	= mysqli_real_escape_string($db,$_POST['alamat_asal']);
	$alamat_tujuan	= mysqli_real_escape_string($db,$_POST['alamat_tujuan']);
	$penerima		= mysqli_real_escape_string($db,$_POST['penerima']);
	$pengirim		= mysqli_real_escape_string($db,$_SESSION['id']);
	$no_hp			= mysqli_real_escape_string($db,$_POST['no_hp_penerima']);
	if (!($nama_brg=='') and !($alamat_asal=='') and !($alamat_tujuan=='') and !($penerima=='') and !($pengirim=='') and !($no_hp=='')){	date_default_timezone_set('Asia/Jakarta'); 
		
		$date  = date("d-m-Y H:i:s");
		$waktu = 'Orderan Dibuat &nbsp&nbsp&nbsp('.$date.')';
		$sql = "INSERT into tb_transaksi(alamat_asal, alamat_tujuan, penerima, pengirim, nama_barang, no_hp_penerima, status, waktu)
							VALUES  ('$alamat_asal','$alamat_tujuan','$penerima','$pengirim','$nama_brg','$no_hp','Belum Terkirim', '$waktu')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2>Order anda telah diinput dan akan diantar oleh kurir<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../dataorder.php'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../input-order.php'>";
	}
	
?>
	