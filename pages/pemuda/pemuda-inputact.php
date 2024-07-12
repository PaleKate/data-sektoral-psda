<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemuda.php');
$id=bin2hex(random_bytes(20));
$pemuda=$_POST['pemuda'];
$org=$_POST['org'];
$org_aktif=$_POST['org_aktif'];
$tahun=$_POST['tahun'];
$sqlcek = "SELECT id_tahun FROM pemuda WHERE id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'pemuda.php';
				});
				</script>";	
}else{
	if($org<$org_aktif){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Jumlah Organisasi harus lebih besar dari jumlah organisasi yang aktif!'
					  }).then(function() {
					window.location = 'pemuda.php';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO pemuda (id_pemuda, pemuda, org, org_aktif, id_tahun)
				VALUES ('$id','$pemuda','$org','$org_aktif','$tahun')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'pemuda.php';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'pemuda.php';
				});
			</script>";}

	}
}
?>