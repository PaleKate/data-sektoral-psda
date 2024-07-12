<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pasar-tradisional.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$permanen=$_POST['permanen'];
$semi=$_POST['semi'];
$tanpa_bng=$_POST['tanpa_bng'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM pasar_tradisional WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_pasar_tradisional!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=pasar-tradisional';
				});
				</script>";	
}else{
$sql="UPDATE pasar_tradisional SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', permanen='$permanen', semi='$semi', tanpa_bng='$tanpa_bng' 
	  WHERE id_pasar_tradisional='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=pasar-tradisional';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=pasar-tradisional';
			});
		</script>";
	}
}
?>