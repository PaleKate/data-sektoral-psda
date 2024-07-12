<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('olahraga.php');
$id_olahraga=$_POST['id_olahraga'];
$jumlah = count($id_olahraga);
	for($i=0; $i<$jumlah; $i++){
		$id = $id_olahraga[$i];
		$voli_out = $_POST['voli_out'][$i];
		$voli_in = $_POST['voli_in'][$i];
		$basket = $_POST['basket'][$i];
		$tenis_meja = $_POST['tenis_meja'][$i];
		$tenis_lapang = $_POST['tenis_lapang'][$i];
		$futsal = $_POST['futsal'][$i];
		$bola = $_POST['bola'][$i];
		$bultang = $_POST['bultang'][$i];
		$gd_olahraga = $_POST['gd_olahraga'][$i];
		$kolam = $_POST['kolam'][$i];
		$tinju = $_POST['tinju'][$i];
		$motor = $_POST['motor'][$i];
		$fitness = $_POST['fitness'][$i];
		$mini_soccer = $_POST['mini_soccer'][$i];
		$sql="UPDATE olahraga SET voli_out='$voli_out', voli_in='$voli_in', basket='$basket', tenis_meja='$tenis_meja', 
			  tenis_lapang='$tenis_lapang', futsal='$futsal', bola='$bola', bultang='$bultang', gd_olahraga='$gd_olahraga', 
			  kolam='$kolam', tinju='$tinju', motor='$motor', fitness='$fitness', mini_soccer='$mini_soccer' 
			  WHERE id_olahraga='$id'";
		$query 	= mysqli_query($koneksidb,$sql);
	}
		if($query){
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'success',
					  title: 'Done',
					  text: 'Data Berhasil Diupdate'
					}).then(function() {
						window.location = 'module=olahraga';
					});
				</script>";
		}else {
			echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Terjadi Kesalahan Update Data!'
					}).then(function() {
						window.location = 'module=olahraga';
					});
				</script>";
			}
	
?>