<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('usaha.php');
$id_usaha_wisata=$_POST['id_usaha_wisata'];
$jumlah = count($id_usaha_wisata);
	for($i=0; $i<$jumlah; $i++){
		$id = $id_usaha_wisata[$i];
		$biro = $_POST['biro'][$i];
		$agen = $_POST['agen'][$i];
		$sql="UPDATE usaha_wisata SET biro='$biro', agen='$agen' WHERE id_usaha_wisata='$id'";
		$query 	= mysqli_query($koneksidb,$sql);
	}
		if($query){
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'success',
					  title: 'Done',
					  text: 'Data Berhasil Diupdate'
					}).then(function() {
						window.location = 'module=usaha-jasa-wisata';
					});
				</script>";
		}else {
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Terjadi Kesalahan Update Data!'
					}).then(function() {
						window.location = 'module=usaha-jasa-wisata';
					});
				</script>";
			}
	
?>