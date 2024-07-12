<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemohon-kerja.php');
$id=bin2hex(random_bytes(20));
$ak1_laki=$_POST['ak1_laki'];
$ak1_perempuan=$_POST['ak1_perempuan'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM pemohon_kerja WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=pemohon-kerja';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO pemohon_kerja (id_pemohon_kerja, id_kecamatan, id_tahun, ak1_laki, ak1_perempuan)
				VALUES ('$id','$kecamatan','$tahun','$ak1_laki','$ak1_perempuan')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=pemohon-kerja';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=pemohon-kerja';
				});
			</script>";}

	}
?>