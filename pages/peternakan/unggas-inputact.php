<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('unggas.php');
$id=bin2hex(random_bytes(20));
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$produksi3=$_POST['produksi3'];
$produksi4=$_POST['produksi4'];
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$nilai3=$_POST['nilai3'];
$nilai4=$_POST['nilai4'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM hewan_unggas WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=hewan-unggas';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO hewan_unggas (id_hewan_unggas, id_kecamatan, id_tahun, produksi1, produksi2, produksi3, produksi4, 
				nilai1, nilai2, nilai3, nilai4)
				VALUES ('$id','$kecamatan','$tahun','$produksi1','$produksi2','$produksi3','$produksi4',
				'$nilai1','$nilai2','$nilai3','$nilai4')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=hewan-unggas';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=hewan-unggas';
				});
			</script>";}

	}
?>