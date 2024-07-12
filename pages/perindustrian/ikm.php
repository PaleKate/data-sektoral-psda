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
<?php $page = "ikm"; ?>
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
                            <?php 
								if(isset($_POST['cari'])){
									$dari = $_POST['dari'];
									$sampai = $_POST['sampai'];
									$sqlkat = "SELECT ikm.*, jenis_ikm.*, tahun.* 
											   FROM ikm, jenis_ikm, tahun WHERE 
											   ikm.id_jenis_ikm=jenis_ikm.id_jenis_ikm AND 
											   ikm.id_tahun=tahun.id_tahun AND 
											   tahun.tahun='$sampai' AND jenis_ikm.jenis_ikm='$dari'";
									$querykat = mysqli_query($koneksidb,$sqlkat);
									$tahun = mysqli_fetch_array($querykat);
							?>
							<h2>
                                Data Jumlah Industri <?php echo $tahun['jenis_ikm']; ?>  di Kabupaten Tasikmalaya Tahun <?php echo $tahun['tahun']; ?>
                            </h2>
							<?php }else{ ?>
							<h2>
                                Data Jumlah IKM di Kabupaten Tasikmalaya
                            </h2>
							<?php }?>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
								<div class="col-md-6">
									<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#inputModal">
										<i class="material-icons">library_add</i>
										<span>Tambah</span>
									</button>&nbsp;
									<button type="button" class="btn btn-danger waves-effect" onclick="deleteall()">
										<i class="material-icons">delete_forever</i> 
										<span>Hapus Semua</span>
									</button><hr>
								</div>
								<form method="POST" name="periode" onSubmit="return valid();">
									<div class="row clearfix">
										<div class="col-md-2">
											<div class="form-group">
												<select class="form-control dari" name="dari" required>
													<option></option>
													<?php
														$mySql = "SELECT * FROM jenis_ikm ORDER BY id_jenis_ikm";
														$myQry = mysqli_query($koneksidb, $mySql);
														while ($myData = mysqli_fetch_array($myQry)) {
															if ($myData['id_jenis_ikm']== $dataBahan) {
															$cek = " selected";
															} else { $cek=""; }
															echo "<option value='$myData[jenis_ikm]' $cek>$myData[jenis_ikm] </option>";
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
														$mySql = "SELECT * FROM tahun ORDER BY tahun DESC";
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
											<th class="text-center">Kecamatan</th>
											<th class="text-center">Industri (Unit)</th>
											<th class="text-center">Tenaga Kerja (Orang)</th>
											<th class="text-center">Nilai Produksi (Rp.)</th>
											<th class="text-center">Act</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$nomor=0;
											if(isset($_POST['cari'])){
												$dari = $_POST['dari'];
												$sampai = $_POST['sampai'];
												$sqlthn = "SELECT ikm.*, jenis_ikm.*, kecamatan.*, tahun.* FROM ikm, jenis_ikm, kecamatan, tahun WHERE 
														   ikm.id_kecamatan=kecamatan.id_kecamatan AND 
														   ikm.id_jenis_ikm=jenis_ikm.id_jenis_ikm AND 
														   ikm.id_tahun=tahun.id_tahun AND 
														   tahun.tahun='$sampai' AND jenis_ikm.jenis_ikm='$dari' ORDER BY kecamatan.kecamatan ASC";
											}else{
											$sqlthn = "SELECT ikm.*, jenis_ikm.*, kecamatan.*, tahun.* FROM ikm, jenis_ikm, kecamatan, tahun WHERE 
													   ikm.id_kecamatan=kecamatan.id_kecamatan AND 
													   ikm.id_jenis_ikm=jenis_ikm.id_jenis_ikm AND 
													   ikm.id_tahun=tahun.id_tahun AND 
													   tahun.tahun='$sampai' AND jenis_ikm.jenis_ikm='$dari' ORDER BY kecamatan.kecamatan ASC";
											}
											$querythn = mysqli_query($koneksidb,$sqlthn);
											while ($result = mysqli_fetch_array($querythn)){
													$total += $result['ikm'];
													$total2 += $result['tk'];
													$total3 += $result['produksi'];
													$nomor++;
										?>
										<tr>
											<td class="text-center"><?php echo $nomor;?></td>
											<td><?php echo $result['kecamatan'];?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['ikm'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['tk'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi'], 0, ",", "."));?></td>
											<td class="text-center">
												<button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" 
														data-toggle="modal" data-target="#editModal<?php echo htmlentities($result['id_ikm']);?>">
													<i class="material-icons">mode_edit</i>
												</button>&nbsp;&nbsp;
												<!-- Large Size -->
												<div class="modal fade" id="editModal<?php echo htmlentities($result['id_ikm']);?>" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="editModalLabel">Form Edit Data Industri <?php echo $result['jenis_ikm']; ?></h4>
															</div>
															<div class="modal-body">
																<form method="POST" action="module=ikm-edit">
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Jenis IKM</b><span style="color:red">*</span></label>
																			<div style="text-align:left;">
																				<select class="form-control jenis_ikm" name="id_jenis_ikm" style="width:100%;" required>
																					<option value="<?php echo htmlentities($result['id_jenis_ikm']);?>"><?php echo htmlentities($result['jenis_ikm']);?></option>
																					<?php
																						$mySql = "SELECT * FROM jenis_ikm ORDER BY id_jenis_ikm";
																						$myQry = mysqli_query($koneksidb, $mySql);
																						while ($myData = mysqli_fetch_array($myQry)) {
																							if ($myData['id_jenis_ikm']== $dataBahan) {
																							$cek = " selected";
																							} else { $cek=""; }
																							echo "<option value='$myData[id_jenis_ikm]' $cek>$myData[jenis_ikm] </option>";
																						}
																					?>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Kecamatan</b><span style="color:red">*</span></label>
																			<div style="text-align:left;">
																				<select class="form-control kecamatan" name="kecamatan" style="width:100%;" required>
																					<option value="<?php echo htmlentities($result['id_kecamatan']);?>"><?php echo htmlentities($result['kecamatan']);?></option>
																					<?php
																						$mySql = "SELECT * FROM kecamatan ORDER BY kecamatan";
																						$myQry = mysqli_query($koneksidb, $mySql);
																						while ($myData = mysqli_fetch_array($myQry)) {
																							if ($myData['id_kecamatan']== $dataBahan) {
																							$cek = " selected";
																							} else { $cek=""; }
																							echo "<option value='$myData[id_kecamatan]' $cek>$myData[kecamatan] </option>";
																						}
																					?>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Tahun</b><span style="color:red">*</span></label>
																			<div style="text-align:left;">
																				<select class="form-control tahun" name="id_tahun" style="width:100%;" required>
																					<option value="<?php echo htmlentities($result['id_tahun']);?>"><?php echo htmlentities($result['tahun']);?></option>
																					<?php
																						$mySql = "SELECT * FROM tahun ORDER BY tahun DESC";
																						$myQry = mysqli_query($koneksidb, $mySql);
																						while ($myData = mysqli_fetch_array($myQry)) {
																							if ($myData['id_tahun']== $dataBahan) {
																							$cek = " selected";
																							} else { $cek=""; }
																							echo "<option value='$myData[id_tahun]' $cek>$myData[tahun] </option>";
																						}
																					?>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Jumlah Industri</b></label>
																			<div class="form-line">
																				<input type="hidden" name="id" value="<?php echo htmlentities($result['id_ikm']);?>">
																				<input type="number" name="ikm" class="form-control" min=0 value="<?php echo $result['ikm'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Jumlah Tenaga Kerja</b></label>
																			<div class="form-line">
																				<input type="number" name="tk" class="form-control" min=0 value="<?php echo $result['tk'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Jumlah Nilai Produksi</b></label>
																			<div class="form-line">
																				<input type="number" name="produksi" class="form-control" min=0 value="<?php echo $result['produksi'];?>">
																			</div>
																		</div>
																	</div>
															</div>
															<div class="modal-footer">
																<button type="submit" class="btn btn-primary waves-effect" name="submit">UPDATE</button>
																<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
															</div>
																</form>
														</div>
													</div>
												</div>
												<!-- #END Large Size -->
												<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float"
														onclick="Swal.fire({
															icon: 'warning',
															title: 'Sure',
															text: 'Apakah Kamu Yakin Akan Menghapusnya ?',
															showCancelButton: true,
															confirmButtonText: 'Ya Hapus',
																}).then((result) => {
																if (result.isConfirmed) {
																window.location = 'ikm-del.php?id=<?php echo htmlentities($result['id_ikm']);?>';
																}
															})">
													<i class="material-icons">delete</i>
												</button>
											</td>
										</tr>
										<?php }?>
									</tbody>
									<tfoot>
										<tr>
											<td class="text-center" style="font-weight:bold;" colspan="2">Total</td>
											<td class="text-center"><?php echo number_format($total, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total2, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total3, 0, ",", ".");?></td>
											<td></td>
										</tr>
									</tfoot>
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
	<?php include ('ikm-input.php'); ?>
	<!-- #END# Form Edit -->
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
				window.location = 'ikm-delall.php';
				}
			})
		}
	</script>
	<script>
		$('.dari').select2({
        placeholder: "Pilih IKM",
        allowClear: true
		});
		
		$('.sampai').select2({
        placeholder: "Pilih Tahun",
        allowClear: true
		});
		
		$('.tahun').select2({
        placeholder: "Pilih Tahun",
        allowClear: true
		});
		
		$('.jenis_ikm').select2({
        placeholder: "Pilih IKM",
        allowClear: true
		});
		
		$('.jenis_ikm').select2({
        placeholder: "Pilih IKM",
        allowClear: true
		});
		
		$('.kecamatan').select2({
        placeholder: "Pilih Kecamatan",
        allowClear: true
		});
		
		$('.kecamatan').select2({
        placeholder: "Pilih kecamatan",
        allowClear: true
		});
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
</body>
</html>
<?php }?>