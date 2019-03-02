<?php
//koneksi ke database
if (isset($_SESSION['r3su'])){
	if (!($_SESSION['r3su'] == 'dmn')){
		if($_SESSION['r3su'] == 'plg'){
			header('location:../pelanggan/');
		}
		else if($_SESSION['r3su'] == 'krr'){
			header('location:../kurir/');
		}
	}
}
else{
	header('location:../');
}
?>