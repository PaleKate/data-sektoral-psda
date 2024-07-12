<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('komoditas.php');
	$mySql	= "DELETE FROM komoditas";
	$myQry	= mysqli_query($koneksidb, $mySql);{
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Semua Data Berhasil Dihapus'
			}).then(function() {
				window.location = 'module=komoditas';
			});
		</script>";
	}
?>