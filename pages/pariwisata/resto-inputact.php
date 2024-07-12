<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('resto.php');
$id=bin2hex(random_bytes(20));
$resto=$_POST['resto'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM resto WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=rumah-makan';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO resto (id_resto, id_kecamatan, id_tahun, resto)
				VALUES ('$id','$kecamatan','$tahun','$resto')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=rumah-makan';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=rumah-makan';
				});
			</script>";}

	}
?>