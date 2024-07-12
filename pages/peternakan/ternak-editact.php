<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ternak.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$produksi3=$_POST['produksi3'];
$produksi4=$_POST['produksi4'];
$produksi5=$_POST['produksi5'];
$produksi6=$_POST['produksi6'];
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$nilai3=$_POST['nilai3'];
$nilai4=$_POST['nilai4'];
$nilai5=$_POST['nilai5'];
$nilai6=$_POST['nilai6'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM hewan_ternak WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_hewan_ternak!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=hewan-ternak';
				});
				</script>";	
}else{
$sql="UPDATE hewan_ternak SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', produksi1='$produksi1', produksi2='$produksi2',
	  produksi3='$produksi3', produksi4='$produksi4', produksi5='$produksi5', produksi6='$produksi6', nilai1='$nilai1', 
	  nilai2='$nilai2', nilai3='$nilai3', nilai4='$nilai4', nilai5='$nilai5', nilai6='$nilai6'
	  WHERE id_hewan_ternak='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=hewan-ternak';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=hewan-ternak';
			});
		</script>";
	}
}
?>