<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pasar-modern.php');
	$mySql	= "DELETE FROM pasar_modern";
	$myQry	= mysqli_query($koneksidb, $mySql);{
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Semua Data Berhasil Dihapus'
			}).then(function() {
				window.location = 'module=pasar-modern';
			});
		</script>";
	}
?>