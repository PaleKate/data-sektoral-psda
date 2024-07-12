<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('kebun.php');
$id_jenis_kebun=$_POST['id_jenis_kebun'];
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$panen=$_POST['panen'];
$produksi=$_POST['produksi'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM kebun WHERE id_kecamatan='$kecamatan' AND id_jenis_kebun='$id_jenis_kebun' AND id_tahun='$id_tahun' AND id_kebun!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=kebun';
				});
				</script>";	
}else{
$sql="UPDATE kebun SET id_jenis_kebun='$id_jenis_kebun', id_kecamatan='$kecamatan', id_tahun='$id_tahun', panen='$panen', produksi='$produksi' 
	  WHERE id_kebun='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=kebun';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=kebun';
			});
		</script>";
	}
}
?>