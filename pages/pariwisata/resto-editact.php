<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('resto.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$resto=$_POST['resto'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM resto WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_resto!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=rumah-makan';
				});
				</script>";	
}else{
$sql="UPDATE resto SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', resto='$resto', kamar='$kamar', kasur='$kasur' 
	  WHERE id_resto='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=rumah-makan';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=rumah-makan';
			});
		</script>";
	}
}
?>