<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('investasi.php');
if(isset($_GET['id'])){
	$id	= $_GET['id'];
	$mySql	= "DELETE FROM investasi WHERE id_investasi='$id'";
	$myQry	= mysqli_query($koneksidb, $mySql);
	echo "<script type='text/javascript'> 
			Swal.fire({
			  icon: 'success',
			  title: 'Dihapus',
			  text: 'Data Berhasil Dihapus',
			}).then(function() {
				window.location = 'module=investasi';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Delete Data!'
			}).then(function() {
				window.location = 'module=investasi';
			});
		</script>";
}
?>