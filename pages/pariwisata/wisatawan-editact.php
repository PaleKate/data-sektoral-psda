<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('wisatawan.php');
$bulan=$_POST['bulan'];
$id_tahun=$_POST['id_tahun'];
$kunjungan=$_POST['kunjungan'];
$tiket=$_POST['tiket'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM wisatawan WHERE id_bulan='$bulan' AND id_tahun='$id_tahun' AND id_wisatawan!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=wisatawan';
				});
				</script>";	
}else{
$sql="UPDATE wisatawan SET id_bulan='$bulan', id_tahun='$id_tahun', kunjungan='$kunjungan', tiket='$tiket' 
	  WHERE id_wisatawan='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=wisatawan';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=wisatawan';
			});
		</script>";
	}
}
?>