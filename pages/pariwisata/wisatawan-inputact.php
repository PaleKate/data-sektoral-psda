<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('wisatawan.php');
$id=bin2hex(random_bytes(20));
$kunjungan=$_POST['kunjungan'];
$tiket=$_POST['tiket'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$sqlcek = "SELECT id_bulan,id_tahun FROM wisatawan WHERE id_bulan='$bulan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=wisatawan';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO wisatawan (id_wisatawan, id_bulan, id_tahun, kunjungan, tiket)
				VALUES ('$id','$bulan','$tahun','$kunjungan','$tiket')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=wisatawan';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=wisatawan';
				});
			</script>";}

	}
?>