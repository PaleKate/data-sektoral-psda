<?php
session_start();
error_reporting(0);
include('../includes/config.php');
include('../includes/format_rupiah.php');
include('../includes/library.php');
if(strlen($_SESSION['alogin'])==0){	
header('location: ../../index.php');
} else{
?>	
<!DOCTYPE html>
<?php $page = "pora"; ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Database PSDA | Admin Dashboard</title>
    <?php include ('../includes/head.php'); ?>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <?php include ('../includes/header.php'); ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php include ('../includes/sidebar.php'); ?>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kepemudaan Bidang PSDA
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
								<div class="col-md-6">
									<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#inputModal">
										<i class="material-icons">library_add</i>
										<span>Tambah</span>
									</button>&nbsp;
									<button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#editPemudaModal">
										<i class="material-icons">mode_edit</i>
										<span>Edit</span>
									</button><hr>
								</div>
								<form method="POST" name="periode" onSubmit="return valid();">
									<div class="row clearfix">
										<div class="col-md-2">
											<div class="form-group">
												<select class="form-control dari" name="dari" required>
													<option></option>
													<?php
														$mySql = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
																	WHERE pemuda.id_tahun=tahun.id_tahun 
																	ORDER BY tahun.tahun";
														$myQry = mysqli_query($koneksidb, $mySql);
														while ($myData = mysqli_fetch_array($myQry)) {
															if ($myData['id_tahun']== $dataBahan) {
															$cek = " selected";
															} else { $cek=""; }
															echo "<option value='$myData[tahun]' $cek>$myData[tahun] </option>";
														}
													?>
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<select class="form-control sampai" name="sampai" required>
													<option></option>
													<?php
														$mySql = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
																	WHERE pemuda.id_tahun=tahun.id_tahun 
																	ORDER BY tahun.tahun";
														$myQry = mysqli_query($koneksidb, $mySql);
														while ($myData = mysqli_fetch_array($myQry)) {
															if ($myData['id_tahun']== $dataBahan) {
															$cek = " selected";
															} else { $cek=""; }
															echo "<option value='$myData[tahun]' $cek>$myData[tahun] </option>";
														}
													?>
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<button type="submit" name="cari" class="btn btn-primary waves-effect">
												<i class="material-icons">search</i> 
												<span>Cari</span>
											</button>
										</div>
									</div>
								</form>
								<table class="display table table-striped table-bordered table-hover" width="100%" id="example-table" cellspacing="0">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Indikator</th>
											<th class="text-center">Satuan</th>
											<?php 
												if(isset($_POST['cari'])){
													$dari = $_POST['dari'];
													$sampai = $_POST['sampai'];
													$sqlthn = "SELECT * FROM tahun WHERE tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
												}else{
												$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
															WHERE pemuda.id_tahun=tahun.id_tahun
															ORDER BY tahun.tahun DESC LIMIT 5";
												}
												$querythn = mysqli_query($koneksidb,$sqlthn);
												while ($result = mysqli_fetch_array($querythn)){
											?>
											<th class="text-center"><?php echo htmlentities($result['tahun']);?></th>
												<?php }?>
										</tr>
									</thead>
									<tbody>
										<tr><?php $nomor = 1; ?>
											<td class="text-center"><?php echo $nomor++;?></td>
											<td>Jumlah Pemuda Per Kabupaten</td>
											<td class="text-center">Orang</td>
											<?php 
												if(isset($_POST['cari'])){
													$dari = $_POST['dari'];
													$sampai = $_POST['sampai'];
													$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
																WHERE pemuda.id_tahun=tahun.id_tahun AND 
																tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun.tahun ASC limit 5";
												}else{
												$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
															WHERE pemuda.id_tahun=tahun.id_tahun
															ORDER BY tahun.tahun DESC LIMIT 5";
												}
												$querythn = mysqli_query($koneksidb,$sqlthn);
												while ($result = mysqli_fetch_array($querythn)){
											?>
											<td class="text-center"><?php echo htmlentities(number_format($result['pemuda'], 0, ",", "."));?></td>
												<?php }?>
										</tr>
										<tr>
											<td class="text-center"><?php echo $nomor++;?></td>
											<td>Jumlah Organisasi</td>
											<td class="text-center">Organisasi</td>
											<?php 
												if(isset($_POST['cari'])){
													$dari = $_POST['dari'];
													$sampai = $_POST['sampai'];
													$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
																WHERE pemuda.id_tahun=tahun.id_tahun AND 
																tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun.tahun ASC limit 5";
												}else{
												$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
															WHERE pemuda.id_tahun=tahun.id_tahun
															ORDER BY tahun.tahun DESC LIMIT 5";
												}
												$querythn = mysqli_query($koneksidb,$sqlthn);
												while ($result = mysqli_fetch_array($querythn)){
											?>
											<td class="text-center"><?php echo htmlentities(number_format($result['org'], 0, ",", "."));?></td>
												<?php }?>
										</tr>
										<tr>
											<td class="text-center"><?php echo $nomor++;?></td>
											<td>Jumlah Organisasi yang Aktif</td>
											<td class="text-center">Organisasi</td>
											<?php 
												if(isset($_POST['cari'])){
													$dari = $_POST['dari'];
													$sampai = $_POST['sampai'];
													$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
																WHERE pemuda.id_tahun=tahun.id_tahun AND 
																tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun.tahun ASC limit 5";
												}else{
												$sqlthn = "SELECT pemuda.*, tahun.* FROM pemuda, tahun 
															WHERE pemuda.id_tahun=tahun.id_tahun
															ORDER BY tahun.tahun DESC LIMIT 5";
												}
												$querythn = mysqli_query($koneksidb,$sqlthn);
												while ($result = mysqli_fetch_array($querythn)){
											?>
											<td class="text-center"><?php echo htmlentities(number_format($result['org_aktif'], 0, ",", "."));?></td>
												<?php }?>
										</tr>
									</tbody>
								</table>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<?php include ('../includes/script.php'); ?>
	
	<!-- Form Edit -->
	<?php include ('pemuda-edit.php'); ?>
	<!-- #END# Form Edit -->
	
	<!-- Form Edit -->
	<?php include ('pemuda-input.php'); ?>
	<!-- #END# Form Edit -->
	
	<script>
		$('.dari').select2({
        placeholder: "Dari",
        allowClear: true
		});
		
		$('.sampai').select2({
        placeholder: "Sampai",
        allowClear: true
		});
		
		$('.tahun').select2({
        placeholder: "Pilih Tahun",
        allowClear: true
		});
	</script>
	
	<script type="text/javascript">
        function deleteall() {
			Swal.fire({
			icon: 'warning',
			title: 'Sure',
			text: 'Apakah Kamu Yakin Akan Menghapus Semua Data ?',
			showCancelButton: true,
			confirmButtonText: 'Ya Hapus',
				}).then((result) => {
				if (result.isConfirmed) {
				window.location = 'pemuda-delall.php';
				}
			})
		}
	</script>
	<script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
				lengthMenu:[
					[10,20,50,100,-1],
					[10,20,50,100,"All"]
					],
				buttons: [{
                extend: 'copyHtml5'
            },
            {
                extend: 'excelHtml5'
            },
            {
                extend: 'pdfHtml5',
				orientation: 'landscape'
            },
			{
                extend: 'print'
            }],
				dom: 
			"<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
			"<'row'<'col-md-12'tr>>" +
			"<'row'<'col-md-5'i><'col-md-7'p>>"
            });
			table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        })
    </script>
	<script type="text/javascript">
		function valid()
		{
			if(document.periode.sampai.value < document.periode.dari.value){
				Swal.fire({
			icon: 'warning',
			title: 'Oops',
			text: 'Tahun sampai harus lebih besar dari tahun dari!'
				}).then(function() {
					window.location = 'pemuda.php';
			});
				return false;
			}

		return true;
		}
	</script>
</body>
</html>
<?php }?>