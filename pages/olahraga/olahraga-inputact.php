<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('olahraga.php');
$id=bin2hex(random_bytes(20));
$voli_out=$_POST['voli_out'];
$voli_in=$_POST['voli_in'];
$basket=$_POST['basket'];
$tenis_meja=$_POST['tenis_meja'];
$tenis_lapang=$_POST['tenis_lapang'];
$futsal=$_POST['futsal'];
$bola=$_POST['bola'];
$bultang=$_POST['bultang'];
$gd_olahraga=$_POST['gd_olahraga'];
$kolam=$_POST['kolam'];
$tinju=$_POST['tinju'];
$motor=$_POST['motor'];
$fitness=$_POST['fitness'];
$mini_soccer=$_POST['mini_soccer'];
$tahun=$_POST['tahun'];
$sqlcek = "SELECT id_tahun FROM olahraga WHERE id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=olahraga';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO olahraga (id_olahraga, voli_out, voli_in, basket, tenis_meja, tenis_lapang, futsal, bola, 
				bultang, gd_olahraga, kolam, tinju, motor, fitness, mini_soccer, id_tahun)
				VALUES ('$id','$voli_out','$voli_in','$basket','$tenis_meja','$tenis_lapang','$futsal','$bola','$bultang',
				'$gd_olahraga','$kolam','$tinju','$motor','$fitness','$mini_soccer','$tahun')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=olahraga';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=olahraga';
				});
			</script>";}

	}
?>