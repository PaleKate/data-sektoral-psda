<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('usaha.php');
$id=bin2hex(random_bytes(20));
$biro=$_POST['biro'];
$agen=$_POST['agen'];
$tahun=$_POST['tahun'];
$sqlcek = "SELECT id_tahun FROM usaha_wisata WHERE id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=usaha-jasa-wisata';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO usaha_wisata (id_usaha_wisata, biro, agen, id_tahun)
				VALUES ('$id','$biro','$agen','$tahun')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=usaha-jasa-wisata';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=usaha-jasa-wisata';
				});
			</script>";}

	}
?>