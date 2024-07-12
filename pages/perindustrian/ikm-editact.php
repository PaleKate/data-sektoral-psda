<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikm.php');
$id_jenis_ikm=$_POST['id_jenis_ikm'];
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$ikm=$_POST['ikm'];
$tk=$_POST['tk'];
$produksi=$_POST['produksi'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM ikm WHERE id_kecamatan='$kecamatan' AND id_jenis_ikm='$id_jenis_ikm' AND id_tahun='$id_tahun' AND id_ikm!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=ikm';
				});
				</script>";	
}else{
$sql="UPDATE ikm SET id_jenis_ikm='$id_jenis_ikm', id_kecamatan='$kecamatan', id_tahun='$id_tahun', ikm='$ikm', tk='$tk', produksi='$produksi' 
	  WHERE id_ikm='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=ikm';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=ikm';
			});
		</script>";
	}
}
?>