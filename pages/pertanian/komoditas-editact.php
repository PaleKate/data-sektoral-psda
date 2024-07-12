<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('komoditas.php');
$id_jenis_komoditas=$_POST['id_jenis_komoditas'];
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$luas_tanam=$_POST['luas_tanam'];
$luas_panen=$_POST['luas_panen'];
$produksi=$_POST['produksi'];
$provitas=$_POST['provitas'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM komoditas WHERE id_kecamatan='$kecamatan' AND id_jenis_komoditas='$id_jenis_komoditas' AND id_tahun='$id_tahun' AND id_komoditas!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=komoditas';
				});
				</script>";	
}else{
$sql="UPDATE komoditas SET id_jenis_komoditas='$id_jenis_komoditas', id_kecamatan='$kecamatan', id_tahun='$id_tahun', luas_tanam='$luas_tanam', luas_panen='$luas_panen', provitas='$provitas', produksi='$produksi' 
	  WHERE id_komoditas='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=komoditas';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=komoditas';
			});
		</script>";
	}
}
?>