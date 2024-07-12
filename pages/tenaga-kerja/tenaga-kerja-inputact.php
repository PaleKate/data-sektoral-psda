<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('tenaga-kerja.php');
$id=bin2hex(random_bytes(20));
$tk_laki=$_POST['tk_laki'];
$tk_perempuan=$_POST['tk_perempuan'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM tenaga_kerja WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=tenaga-kerja-blk';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO tenaga_kerja (id_tenaga_kerja, id_kecamatan, id_tahun, tk_laki, tk_perempuan)
				VALUES ('$id','$kecamatan','$tahun','$tk_laki','$tk_perempuan')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=tenaga-kerja-blk';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=tenaga-kerja-blk';
				});
			</script>";}

	}
?>