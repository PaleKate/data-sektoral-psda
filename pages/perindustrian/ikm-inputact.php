<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikm.php');
$id=bin2hex(random_bytes(20));
$ikm=$_POST['ikm'];
$tk=$_POST['tk'];
$produksi=$_POST['produksi'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$id_jenis_ikm=$_POST['id_jenis_ikm'];
$sqlcek = "SELECT id_kecamatan,id_tahun,id_jenis_ikm FROM ikm WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun' AND id_jenis_ikm='$id_jenis_ikm'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=ikm';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO ikm (id_ikm, id_jenis_ikm, id_kecamatan, id_tahun, ikm, tk, produksi)
				VALUES ('$id','$id_jenis_ikm','$kecamatan','$tahun','$ikm','$tk','$produksi')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=ikm';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=ikm';
				});
			</script>";}

	}
?>