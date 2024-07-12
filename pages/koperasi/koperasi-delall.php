<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('koperasi.php');
	$mySql	= "DELETE FROM koperasi";
	$myQry	= mysqli_query($koneksidb, $mySql);{
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Semua Data Berhasil Dihapus'
			}).then(function() {
				window.location = 'module=koperasi';
			});
		</script>";
	}
?>