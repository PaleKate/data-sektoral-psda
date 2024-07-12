<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikan-budidaya.php');
	$mySql	= "DELETE FROM ikan_budidaya";
	$myQry	= mysqli_query($koneksidb, $mySql);{
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Semua Data Berhasil Dihapus'
			}).then(function() {
				window.location = 'module=perikanan-budidaya';
			});
		</script>";
	}
?>