<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikan-tangkap.php');
	$mySql	= "DELETE FROM ikan_tangkap";
	$myQry	= mysqli_query($koneksidb, $mySql);{
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Semua Data Berhasil Dihapus'
			}).then(function() {
				window.location = 'module=perikanan-tangkap';
			});
		</script>";
	}
?>