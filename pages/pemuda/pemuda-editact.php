<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemuda.php');
$id_pemuda=$_POST['id_pemuda'];
$jumlah = count($id_pemuda);
	for($i=0; $i<$jumlah; $i++){
		$id = $id_pemuda[$i];
		$pemuda = $_POST['pemuda'][$i];
		$org = $_POST['org'][$i];
		$org_aktif = $_POST['org_aktif'][$i];
		$sql="UPDATE pemuda SET pemuda='$pemuda', org='$org', org_aktif='$org_aktif' WHERE id_pemuda='$id'";
		$query 	= mysqli_query($koneksidb,$sql);
	}
		if($query){
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'success',
					  title: 'Done',
					  text: 'Data Berhasil Diupdate'
					}).then(function() {
						window.location = 'pemuda.php';
					});
				</script>";
		}else {
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Terjadi Kesalahan Update Data!'
					}).then(function() {
						window.location = 'pemuda.php';
					});
				</script>";
			}
	
?>