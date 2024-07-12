<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('ikan-budidaya.php');
$id=bin2hex(random_bytes(20));
$produksi1=$_POST['produksi1'];
$produksi2=$_POST['produksi2'];
$produksi3=$_POST['produksi3'];
$produksi4=$_POST['produksi4'];
$produksi5=$_POST['produksi5'];
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$nilai3=$_POST['nilai3'];
$nilai4=$_POST['nilai4'];
$nilai5=$_POST['nilai5'];
$tahun=$_POST['tahun'];
$kecamatan=$_POST['kecamatan'];
$id_jenis_ikan_budidaya=$_POST['id_jenis_ikan_budidaya'];
$sqlcek = "SELECT id_kecamatan,id_tahun FROM ikan_budidaya WHERE id_kecamatan='$kecamatan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=perikanan-budidaya';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO ikan_budidaya (id_ikan_budidaya, id_kecamatan, id_tahun, produksi1, produksi2, produksi3, produksi4, produksi5,
				nilai1, nilai2, nilai3, nilai4, nilai5)
				VALUES ('$id','$kecamatan','$tahun','$produksi1','$produksi2','$produksi3','$produksi4','$produksi5',
				'$nilai1','$nilai2','$nilai3','$nilai4','$nilai5')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=perikanan-budidaya';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=perikanan-budidaya';
				});
			</script>";}

	}
?>