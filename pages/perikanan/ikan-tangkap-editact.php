<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikan-tangkap.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM ikan_tangkap WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_ikan_tangkap!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=perikanan-tangkap';
				});
				</script>";	
}else{
$sql="UPDATE ikan_tangkap SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', produksi1='$produksi1', produksi2='$produksi2', nilai1='$nilai1', nilai2='$nilai2' 
	  WHERE id_ikan_tangkap='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=perikanan-tangkap';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=perikanan-tangkap';
			});
		</script>";
	}
}
?>