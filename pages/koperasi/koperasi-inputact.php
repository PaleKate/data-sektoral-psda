<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('koperasi.php');
$id=bin2hex(random_bytes(20));
$aktif=$_POST['aktif'];
$nonaktif=$_POST['nonaktif'];
$manajer=$_POST['manajer'];
$karyawan=$_POST['karyawan'];
$tahun=$_POST['tahun'];
$jenis_koperasi=$_POST['jenis_koperasi'];
$sqlcek = "SELECT id_jenis_koperasi,id_tahun FROM koperasi WHERE id_jenis_koperasi='$jenis_koperasi' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=koperasi';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO koperasi (id_koperasi, id_jenis_koperasi, id_tahun, aktif, nonaktif, manajer, karyawan)
				VALUES ('$id','$jenis_koperasi','$tahun','$aktif','$nonaktif','$manajer','$karyawan')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=koperasi';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=koperasi';
				});
			</script>";}

	}
?>