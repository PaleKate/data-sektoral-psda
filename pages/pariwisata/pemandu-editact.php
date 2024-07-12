<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemandu.php');
$id_pemandu=$_POST['id_pemandu'];
$jumlah = count($id_pemandu);
	for($i=0; $i<$jumlah; $i++){
		$id = $id_pemandu[$i];
		$sertifikat = $_POST['sertifikat'][$i];
		$nonsertifikat = $_POST['nonsertifikat'][$i];
		$sql="UPDATE pemandu SET sertifikat='$sertifikat', nonsertifikat='$nonsertifikat' WHERE id_pemandu='$id'";
		$query 	= mysqli_query($koneksidb,$sql);
	}
		if($query){
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'success',
					  title: 'Done',
					  text: 'Data Berhasil Diupdate'
					}).then(function() {
						window.location = 'module=pemandu';
					});
				</script>";
		}else {
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Terjadi Kesalahan Update Data!'
					}).then(function() {
						window.location = 'module=pemandu';
					});
				</script>";
			}
	
?>