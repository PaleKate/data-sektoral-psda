<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('benih.php');
$id=bin2hex(random_bytes(20));
$mas=$_POST['mas'];
$nila=$_POST['nila'];
$nilem=$_POST['nilem'];
$mujair=$_POST['mujair'];
$gurame=$_POST['gurame'];
$tawes=$_POST['tawes'];
$lele=$_POST['lele'];
$sapat=$_POST['sapat'];
$tambakan=$_POST['tambakan'];
$lainnya=$_POST['lainnya'];
$tahun=$_POST['tahun'];
$sqlcek = "SELECT id_tahun FROM benih WHERE id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=benih';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO benih (id_benih, mas, nila, nilem, mujair, gurame, tawes, lele, 
				sapat, tambakan, lainnya, id_tahun)
				VALUES ('$id','$mas','$nila','$nilem','$mujair','$gurame','$tawes','$lele','$sapat',
				'$tambakan','$lainnya','$tahun')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=benih';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=benih';
				});
			</script>";}

	}
?>