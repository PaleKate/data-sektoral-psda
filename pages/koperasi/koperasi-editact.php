<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('koperasi.php');
$jenis_koperasi=$_POST['jenis_koperasi'];
$id_tahun=$_POST['id_tahun'];
$aktif=$_POST['aktif'];
$nonaktif=$_POST['nonaktif'];
$manajer=$_POST['manajer'];
$karyawan=$_POST['karyawan'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM koperasi WHERE id_jenis_koperasi='$jenis_koperasi' AND id_tahun='$id_tahun' AND id_koperasi!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=koperasi';
				});
				</script>";	
}else{
$sql="UPDATE koperasi SET id_jenis_koperasi='$jenis_koperasi', id_tahun='$id_tahun', aktif='$aktif', nonaktif='$nonaktif', 
	  manajer='$manajer', karyawan='$karyawan' 
	  WHERE id_koperasi='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=koperasi';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=koperasi';
			});
		</script>";
	}
}
?>