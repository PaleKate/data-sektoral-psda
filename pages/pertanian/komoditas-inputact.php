<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('komoditas.php');
$id=bin2hex(random_bytes(20));
$luas_tanam=$_POST['luas_tanam'];
$luas_panen=$_POST['luas_panen'];
$provitas=$_POST['provitas'];
$produksi=$_POST['produksi'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$id_jenis_komoditas=$_POST['id_jenis_komoditas'];
$sqlcek = "SELECT id_kecamatan,id_tahun,id_jenis_komoditas FROM komoditas WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun' AND id_jenis_komoditas='$id_jenis_komoditas'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=komoditas';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO komoditas (id_komoditas, id_jenis_komoditas, id_kecamatan, id_tahun, luas_tanam, luas_panen, provitas, produksi)
				VALUES ('$id','$id_jenis_komoditas','$kecamatan','$tahun','$luas_tanam','$luas_panen','$provitas','$produksi')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=komoditas';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=komoditas';
				});
			</script>";}

	}
?>