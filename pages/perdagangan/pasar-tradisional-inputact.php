<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pasar-tradisional.php');
$id=bin2hex(random_bytes(20));
$permanen=$_POST['permanen'];
$semi=$_POST['semi'];
$tanpa_bng=$_POST['tanpa_bng'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM pasar_tradisional WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=pasar-tradisional';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO pasar_tradisional (id_pasar_tradisional, id_kecamatan, id_tahun, permanen, semi, tanpa_bng)
				VALUES ('$id','$kecamatan','$tahun','$permanen','$semi','$tanpa_bng')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=pasar-tradisional';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=pasar-tradisional';
				});
			</script>";}

	}
?>