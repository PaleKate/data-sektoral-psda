<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('hotel.php');
$id=bin2hex(random_bytes(20));
$hotel=$_POST['hotel'];
$kamar=$_POST['kamar'];
$kasur=$_POST['kasur'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM hotel WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=hotel';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO hotel (id_hotel, id_kecamatan, id_tahun, hotel, kamar, kasur)
				VALUES ('$id','$kecamatan','$tahun','$hotel','$kamar','$kasur')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=hotel';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=hotel';
				});
			</script>";}

	}
?>