<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('investasi.php');
$bulan=$_POST['bulan'];
$id_tahun=$_POST['id_tahun'];
$investasi=$_POST['investasi'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM investasi WHERE id_bulan='$bulan' AND id_tahun='$id_tahun' AND id_investasi!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=investasi';
				});
				</script>";	
}else{
$sql="UPDATE investasi SET id_bulan='$bulan', id_tahun='$id_tahun', investasi='$investasi'
	  WHERE id_investasi='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=investasi';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=investasi';
			});
		</script>";
	}
}
?>