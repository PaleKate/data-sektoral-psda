<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemohon-kerja.php');
	$mySql	= "DELETE FROM pemohon_kerja";
	$myQry	= mysqli_query($koneksidb, $mySql);{
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Semua Data Berhasil Dihapus'
			}).then(function() {
				window.location = 'module=pemohon-kerja';
			});
		</script>";
	}
?>