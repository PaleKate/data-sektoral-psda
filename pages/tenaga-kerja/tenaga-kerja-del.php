<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('tenaga-kerja.php');
if(isset($_GET['id'])){
	$id	= $_GET['id'];
	$mySql	= "DELETE FROM tenaga_kerja WHERE id_tenaga_kerja='$id'";
	$myQry	= mysqli_query($koneksidb, $mySql);
	echo "<script type='text/javascript'> 
			Swal.fire({
			  icon: 'success',
			  title: 'Dihapus',
			  text: 'Data Berhasil Dihapus',
			}).then(function() {
				window.location = 'module=tenaga-kerja-blk';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Delete Data!'
			}).then(function() {
				window.location = 'module=tenaga-kerja-blk';
			});
		</script>";
}
?>