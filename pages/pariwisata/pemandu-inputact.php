<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemandu.php');
$id=bin2hex(random_bytes(20));
$sertifikat=$_POST['sertifikat'];
$nonsertifikat=$_POST['nonsertifikat'];
$tahun=$_POST['tahun'];
$sqlcek = "SELECT id_tahun FROM pemandu WHERE id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=pemandu';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO pemandu (id_pemandu, sertifikat, nonsertifikat, id_tahun)
				VALUES ('$id','$sertifikat','$nonsertifikat','$tahun')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=pemandu';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=pemandu';
				});
			</script>";}

	}
?>