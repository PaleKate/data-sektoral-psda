<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('umkm.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$umkm=$_POST['umkm'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM umkm WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_umkm!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=umkm';
				});
				</script>";	
}else{
$sql="UPDATE umkm SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', umkm='$umkm' 
	  WHERE id_umkm='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=umkm';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=umkm';
			});
		</script>";
	}
}
?>