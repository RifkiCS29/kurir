<?php
	session_start();
	include '../../koneksi/koneksi.php';
	$no_transaksi	= mysqli_real_escape_string($db,$_POST['no_transaksi']);
	$status	 		= mysqli_real_escape_string($db,$_POST['status']);
	$berat	 		= mysqli_real_escape_string($db,$_POST['berat']);
	$biaya	 		= mysqli_real_escape_string($db,$_POST['biaya']);
		
	if (!($berat == 0)){
	  if(!($status=='')){
		$sql  		= "SELECT * FROM tb_transaksi where no_transaksi='".$no_transaksi."'";                        
		$query  	= mysqli_query($db, $sql);
		$data 		= mysqli_fetch_array($query);
		date_default_timezone_set('Asia/Jakarta'); 		
		$date  = date("d-m-Y H:i:s");
		$waktu = $data['waktu'].'<br>'.$status.' &nbsp&nbsp&nbsp('.$date.')';
		$sql = "UPDATE tb_transaksi set 						
						status	  	= '$status',
						biaya		= '$biaya',
						berat_barang= '$berat',
						waktu		= '$waktu'
				where no_transaksi = '$no_transaksi'";
				
		$execute = mysqli_query($db, $sql);			
		echo" <center><h2>Status Telah Diubah Menjadi ".$status."</h2></center>";		
		if($status == 'Terkirim'){
			echo"<meta http-equiv='refresh' content='2;url=../orderterkirim.php'>";
		}
		else{
			echo"<meta http-equiv='refresh' content='2;url=../ambilorder.php?no_transaksi=".$no_transaksi."'>";
		}
	  }
	  else{
		echo" <center><h2>Masukkan Status Barang</h2></center>
		<meta http-equiv='refresh' content='2;url=../ambilorder.php?no_transaksi=".$no_transaksi."'>";
	  }
	}
	else{
		echo" <center><h2>Masukkan Berat Barang</h2></center>
		<meta http-equiv='refresh' content='2;url=../ambilorder.php?no_transaksi=".$no_transaksi."'>";
	}
	?>
	