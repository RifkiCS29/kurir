<?php
//koneksi ke database
if (isset($_SESSION['r3su'])){
	if (!($_SESSION['r3su'] == 'krr')){
		if($_SESSION['r3su'] == 'plg'){
			header('location:../../pelanggan/');
		}
		else if($_SESSION['r3su'] == 'dmn'){
			header('location:../../admin/');
		}
	}
}

?>