<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('unggas.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$produksi3=$_POST['produksi3'];
$produksi4=$_POST['produksi4'];
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$nilai3=$_POST['nilai3'];
$nilai4=$_POST['nilai4'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM hewan_unggas WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_hewan_unggas!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=hewan-unggas';
				});
				</script>";	
}else{
$sql="UPDATE hewan_unggas SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', produksi1='$produksi1', produksi2='$produksi2',
	  produksi3='$produksi3', produksi4='$produksi4', nilai1='$nilai1', nilai2='$nilai2', nilai3='$nilai3', nilai4='$nilai4'
	  WHERE id_hewan_unggas='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=hewan-unggas';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=hewan-unggas';
			});
		</script>";
	}
}
?>