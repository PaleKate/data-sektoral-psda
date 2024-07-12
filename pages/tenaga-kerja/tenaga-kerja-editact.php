<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('tenaga-kerja.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$tk_laki=$_POST['tk_laki'];
$tk_perempuan=$_POST['tk_perempuan'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM tenaga_kerja WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_tenaga_kerja!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=tenaga-kerja-blk';
				});
				</script>";	
}else{
$sql="UPDATE tenaga_kerja SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', tk_laki='$tk_laki', tk_perempuan='$tk_perempuan' 
	  WHERE id_tenaga_kerja='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=tenaga-kerja-blk';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=tenaga-kerja-blk';
			});
		</script>";
	}
}
?>