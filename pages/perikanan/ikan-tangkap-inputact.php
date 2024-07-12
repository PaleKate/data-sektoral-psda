<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikan-tangkap.php');
$id=bin2hex(random_bytes(20));
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$id_jenis_ikan_tangkap=$_POST['id_jenis_ikan_tangkap'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM ikan_tangkap WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=perikanan-tangkap';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO ikan_tangkap (id_ikan_tangkap, id_kecamatan, id_tahun, produksi1, produksi2, nilai1, nilai2)
				VALUES ('$id','$kecamatan','$tahun','$produksi1','$produksi2','$nilai1','$nilai2')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=perikanan-tangkap';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=perikanan-tangkap';
				});
			</script>";}

	}
?>