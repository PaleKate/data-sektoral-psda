<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('hotel.php');
$kecamatan=$_POST['kecamatan'];
$id_tahun=$_POST['id_tahun'];
$hotel=$_POST['hotel'];
$kamar=$_POST['kamar'];
$kasur=$_POST['kasur'];
$id=$_POST['id'];
$sqlcek = "SELECT * FROM hotel WHERE id_kecamatan='$kecamatan' AND id_tahun='$id_tahun' AND id_hotel!='$id'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data Tersebut Sudah Ada!'
					  }).then(function() {
					window.location = 'module=hotel';
				});
				</script>";	
}else{
$sql="UPDATE hotel SET id_kecamatan='$kecamatan', id_tahun='$id_tahun', hotel='$hotel', kamar='$kamar', kasur='$kasur' 
	  WHERE id_hotel='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'success',
			  title: 'Done',
			  text: 'Data Berhasil Diupdate'
			}).then(function() {
				window.location = 'module=hotel';
			});
		</script>";
}else {
	echo "<script type='text/javascript'>
			Swal.fire({
			  icon: 'warning',
			  title: 'Oops',
			  text: 'Terjadi Kesalahan Update Data!'
			}).then(function() {
				window.location = 'module=hotel';
			});
		</script>";
	}
}
?>