<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pasar-modern.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$minimarket=$_POST['minimarket'];
$supermarket=$_POST['supermarket'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM pasar_modern WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_pasar_modern!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=pasar-modern';
				});
				</script>";	
}else{
$sql="UPDATE pasar_modern SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', minimarket='$minimarket', supermarket='$supermarket' 
	  WHERE id_pasar_modern='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=pasar-modern';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=pasar-modern';
			});
		</script>";
	}
}
?>