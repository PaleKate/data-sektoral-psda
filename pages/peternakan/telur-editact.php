<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('telur.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$produksi3=$_POST['produksi3'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM telur WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_telur!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=telur';
				});
				</script>";	
}else{
$sql="UPDATE telur SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', produksi1='$produksi1', produksi2='$produksi2',
	  produksi3='$produksi3' WHERE id_telur='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=telur';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=telur';
			});
		</script>";
	}
}
?>