<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('organisasi.php');
$id_organisasi=$_POST['id_organisasi'];
$jumlah = count($id_organisasi);
	for($i=0; $i<$jumlah; $i++){
		$id = $id_organisasi[$i];
		$org_olahraga = $_POST['org_olahraga'][$i];
		$org_sosial = $_POST['org_sosial'][$i];
		$sql="UPDATE organisasi SET org_olahraga='$org_olahraga', org_sosial='$org_sosial' WHERE id_organisasi='$id'";
		$query 	= mysqli_query($koneksidb,$sql);
	}
		if($query){
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'success',
					  title: 'Done',
					  text: 'Data Berhasil Diupdate'
					}).then(function() {
						window.location = 'module=organisasi';
					});
				</script>";
		}else {
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Terjadi Kesalahan Update Data!'
					}).then(function() {
						window.location = 'module=organisasi';
					});
				</script>";
			}
	
?>