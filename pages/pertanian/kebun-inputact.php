<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('kebun.php');
$id=bin2hex(random_bytes(20));
$panen=$_POST['panen'];
$produksi=$_POST['produksi'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$id_jenis_kebun=$_POST['id_jenis_kebun'];
$sqlcek = "SELECT id_kecamatan,id_tahun,id_jenis_kebun FROM kebun WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun' AND id_jenis_kebun='$id_jenis_kebun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=kebun';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO kebun (id_kebun, id_jenis_kebun, id_kecamatan, id_tahun, panen, produksi)
				VALUES ('$id','$id_jenis_kebun','$kecamatan','$tahun','$panen','$produksi')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=kebun';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=kebun';
				});
			</script>";}

	}
?>