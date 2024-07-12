<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('organisasi.php');
$id=bin2hex(random_bytes(20));
$org_olahraga=$_POST['org_olahraga'];
$org_sosial=$_POST['org_sosial'];
$tahun=$_POST['tahun'];
$sqlcek = "SELECT id_tahun FROM organisasi WHERE id_tahun='$tahun'";
$querycek = mysqli_query($koneksidb,$sqlcek);
	if(mysqli_num_rows($querycek)>0){
		echo "<script type='text/javascript'>
					Swal.fire({
					  icon: 'warning',
					  title: 'Oops',
					  text: 'Data sudah ada silahkan lakukan update data!'
					  }).then(function() {
					window.location = 'module=organisasi';
				});
				</script>";	
}else{
	$sql 	= "INSERT INTO organisasi (id_organisasi, org_olahraga, org_sosial, id_tahun)
				VALUES ('$id','$org_olahraga','$org_sosial','$tahun')";
	$query 	= mysqli_query($koneksidb,$sql);
	if($query){
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'success',
				  title: 'Done',
				  text: 'Data Berhasil diinput'
				}).then(function() {
					window.location = 'module=organisasi';
				});
			</script>";
	}else {
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'warning',
				  title: 'Oops',
				  text: 'Terjadi Kesalahan Input Data!'
				}).then(function() {
					window.location = 'module=organisasi';
				});
			</script>";}

	}
?>