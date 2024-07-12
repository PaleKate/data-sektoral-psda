<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemuda.php');
$id=bin2hex(random_bytes(20));
$laki_laki=$_POST['laki_laki'];
$perempuan=$_POST['perempuan'];
$tahun=$_POST['tahun'];
$pendidikan=$_POST['pendidikan'];
$sqlcek = "SELECT id_pendidikan,id_tahun FROM pemuda WHERE id_pendidikan='$pendidikan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=pemuda';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO pemuda (id_pemuda, id_pendidikan, id_tahun, laki_laki, perempuan)
				VALUES ('$id','$pendidikan','$tahun','$laki_laki','$perempuan')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=pemuda';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=pemuda';
				});
			</script>";}

	}
?>