<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('investasi.php');
$id=bin2hex(random_bytes(20));
$investasi=$_POST['investasi'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$sqlcek = "SELECT id_bulan,id_tahun FROM investasi WHERE id_bulan='$bulan' AND id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=investasi';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO investasi (id_investasi, id_bulan, id_tahun, investasi)
				VALUES ('$id','$bulan','$tahun','$investasi')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=investasi';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=investasi';
				});
			</script>";}

	}
?>