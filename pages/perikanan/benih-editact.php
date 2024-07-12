<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('benih.php');
$id_benih=$_POST['id_benih'];
$jumlah = count($id_benih);
	for($i=0; $i<$jumlah; $i++){
		$id = $id_benih[$i];
		$mas = $_POST['mas'][$i];
		$nila = $_POST['nila'][$i];
		$nilem = $_POST['nilem'][$i];
		$mujair = $_POST['mujair'][$i];
		$gurame = $_POST['gurame'][$i];
		$tawes = $_POST['tawes'][$i];
		$lele = $_POST['lele'][$i];
		$sapat = $_POST['sapat'][$i];
		$tambakan = $_POST['tambakan'][$i];
		$lainnya = $_POST['lainnya'][$i];
		$sql="UPDATE benih SET mas='$mas', nila='$nila', nilem='$nilem', mujair='$mujair', 
			  gurame='$gurame', tawes='$tawes', lele='$lele', sapat='$sapat', tambakan='$tambakan', 
			  lainnya='$lainnya' 
			  WHERE id_benih='$id'";
		$query 	= mysqli_query($koneksidb,$sql);
	}
		if($query){
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'success',
					  title: 'Done',
					  text: 'Data Berhasil Diupdate'
					}).then(function() {
						window.location = 'module=benih';
					});
				</script>";
		}else {
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Terjadi Kesalahan Update Data!'
					}).then(function() {
						window.location = 'module=benih';
					});
				</script>";
			}
	
?>