<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('telur.php');
$id=bin2hex(random_bytes(20));
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$produksi3=$_POST['produksi3'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM telur WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=telur';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO telur (id_telur, id_kecamatan, id_tahun, produksi1, produksi2, produksi3)
				VALUES ('$id','$kecamatan','$tahun','$produksi1','$produksi2','$produksi3')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=telur';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=telur';
				});
			</script>";}

	}
?>