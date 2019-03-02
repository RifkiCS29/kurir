<?php
	session_start();
	include'../../koneksi/koneksi.php';
	$no_transaksi	= $_GET['no_transaksi'];
	$nama_brg 		= mysqli_real_escape_string($db,$_POST['nama_barang']);
	$alamat_asal	= mysqli_real_escape_string($db,$_POST['alamat_asal']);
	$alamat_tujuan	= mysqli_real_escape_string($db,$_POST['alamat_tujuan']);
	$penerima		= mysqli_real_escape_string($db,$_POST['penerima']);
	$no_hp			= mysqli_real_escape_string($db,$_POST['no_hp_penerima']);
	if (!($nama_brg=='') and !($alamat_asal=='') and !($alamat_tujuan=='') and !($penerima=='') and !($no_hp=='')){	date_default_timezone_set('Asia/Jakarta'); 
		
		$date  = date("Y-m-d H:i:s");
		
		$sql = "UPDATE tb_transaksi SET
						alamat_asal		= '$alamat_asal',
						alamat_tujuan	= '$alamat_tujuan',
						penerima		= '$penerima',	
						nama_barang 	= '$nama_brg',	
						no_hp_penerima	= '$no_hp'
				where no_transaksi = $no_transaksi";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2>Order anda telah diubah<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../dataorder.php'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh'>";
	}
	
?>
	