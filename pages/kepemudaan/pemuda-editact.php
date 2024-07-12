<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('pemuda.php');
$pendidikan=$_POST['pendidikan'];
$id_tahun=$_POST['id_tahun'];
$laki_laki=$_POST['laki_laki'];
$perempuan=$_POST['perempuan'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM pemuda WHERE id_pendidikan='$pendidikan' AND id_tahun='$id_tahun' AND id_pemuda!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=pemuda';
				});
				</script>";	
}else{
$sql="UPDATE pemuda SET id_pendidikan='$pendidikan', id_tahun='$id_tahun', laki_laki='$laki_laki', perempuan='$perempuan' 
	  WHERE id_pemuda='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=pemuda';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=pemuda';
			});
		</script>";
	}
}
?>