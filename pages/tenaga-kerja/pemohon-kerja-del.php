<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemohon-kerja.php');
if(isset($_GET['id'])){
	$id	= $_GET['id'];
	$mySql	= "DELETE FROM pemohon_kerja WHERE id_pemohon_kerja='$id'";
	$myQry	= mysqli_query($koneksidb, $mySql);
	echo "<script type='text/javascript'> 
			Swal.fire({
			  icon: 'success',
			  title: 'Dihapus',
			  text: 'Data Berhasil Dihapus',
			}).then(function() {
				window.location = 'module=pemohon-kerja';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Delete Data!'
			}).then(function() {
				window.location = 'module=pemohon-kerja';
			});
		</script>";
}
?>