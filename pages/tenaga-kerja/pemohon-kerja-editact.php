<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemohon-kerja.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$ak1_laki=$_POST['ak1_laki'];
$ak1_perempuan=$_POST['ak1_perempuan'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM pemohon_kerja WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_pemohon_kerja!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=pemohon-kerja';
				});
				</script>";	
}else{
$sql="UPDATE pemohon_kerja SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', ak1_laki='$ak1_laki', ak1_perempuan='$ak1_perempuan' 
	  WHERE id_pemohon_kerja='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=pemohon-kerja';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=pemohon-kerja';
			});
		</script>";
	}
}
?>