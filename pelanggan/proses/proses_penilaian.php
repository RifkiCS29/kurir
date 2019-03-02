<?php
	session_start();
	include'../../koneksi/koneksi.php';
	$no_transaksi	= mysqli_real_escape_string($db,$_POST['no_transaksi']);
	$nilai			= mysqli_real_escape_string($db,$_POST['nilai']);
	$komentar		= mysqli_real_escape_string($db,$_POST['komentar']);
	
	if (!($nilai=='') and !($komentar=='')){	
		$sql = "UPDATE tb_transaksi SET
						penilaian	='$nilai',
						komentar	='$komentar'
				WHERE no_transaksi = '$no_transaksi'";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2>Penilaian anda telah diinput<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../detail-orderterkirim.php?no_transaksi=".$no_transaksi."'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan save<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../beripenilaian.php?no_transaksi=".$no_transaksi."'>";
	}
	
?>
	