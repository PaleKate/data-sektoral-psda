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
<?php $page = "ternak"; ?>
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
									$sqlkat = "SELECT hewan_ternak.*, tahun.* 
											   FROM hewan_ternak, tahun WHERE 
											   hewan_ternak.id_tahun=tahun.id_tahun AND 
											   tahun.tahun='$sampai'";
									$querykat = mysqli_query($koneksidb,$sqlkat);
									$tahun = mysqli_fetch_array($querykat);
							?>
							<h2>
                                Data Jumlah Populasi dan Produksi Hewan Ternak di Kabupaten Tasikmalaya Tahun <?php echo $tahun['tahun']; ?>
                            </h2>
							<?php }else{ ?>
							<h2>
                                Data Jumlah Populasi dan Produksi Hewan Ternak di Kabupaten Tasikmalaya
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
										<div class="col-md-4">
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
											<th class="text-center">Populasi Sapi Perah (ekor)</th>
											<th class="text-center">Produksi Sapi Perah (ton)</th>
											<th class="text-center">Populasi Sapi Potong (ekor)</th>
											<th class="text-center">Produksi Sapi Potong (ton)</th>
											<th class="text-center">produksi Kerbau (ekor)</th>
											<th class="text-center">Produksi Kerbau (ton)</th>
											<th class="text-center">Populasi Kuda (ekor)</th>
											<th class="text-center">Produksi Kuda (ton)</th>
											<th class="text-center">Populasi Kambing (ekor)</th>
											<th class="text-center">Produksi Kambing (ton)</th>
											<th class="text-center">Populasi Domba (ekor)</th>
											<th class="text-center">Produksi Domba (ton)</th>
											<th class="text-center" width="100">Act</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$nomor=0;
											if(isset($_POST['cari'])){
												$dari = $_POST['dari'];
												$sampai = $_POST['sampai'];
												$sqlthn = "SELECT hewan_ternak.*, kecamatan.*, tahun.* FROM hewan_ternak, kecamatan, tahun WHERE 
														   hewan_ternak.id_kecamatan=kecamatan.id_kecamatan AND
														   hewan_ternak.id_tahun=tahun.id_tahun AND 
														   tahun.tahun='$sampai' ORDER BY kecamatan.kecamatan ASC";
											}else{
											$sqlthn = "SELECT hewan_ternak.*, kecamatan.*, tahun.* FROM hewan_ternak, kecamatan, tahun WHERE 
													   hewan_ternak.id_kecamatan=kecamatan.id_kecamatan AND 
													   hewan_ternak.id_tahun=tahun.id_tahun AND 
													   tahun.tahun='$sampai' ORDER BY kecamatan.kecamatan ASC";
											}
											$querythn = mysqli_query($koneksidb,$sqlthn);
											while ($result = mysqli_fetch_array($querythn)){
													$total1 += $result['produksi1'];
													$total2 += $result['nilai1'];
													$total3 += $result['produksi2'];
													$total4 += $result['nilai2'];
													$total5 += $result['produksi3'];
													$total6 += $result['nilai3'];
													$total7 += $result['produksi4'];
													$total8 += $result['nilai4'];
													$total9 += $result['produksi5'];
													$total10 += $result['nilai5'];
													$total11 += $result['produksi6'];
													$total12 += $result['nilai6'];
													$nomor++;
										?>
										<tr>
											<td class="text-center"><?php echo $nomor;?></td>
											<td><?php echo $result['kecamatan'];?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi1'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['nilai1'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi2'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['nilai2'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi3'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['nilai3'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi4'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['nilai4'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi5'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['nilai5'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['produksi6'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['nilai6'], 0, ",", "."));?></td>
											<td class="text-center">
												<button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" 
														data-toggle="modal" data-target="#editModal<?php echo htmlentities($result['id_hewan_ternak']);?>">
													<i class="material-icons">mode_edit</i>
												</button>&nbsp;&nbsp;
												<!-- Large Size -->
												<div class="modal fade" id="editModal<?php echo htmlentities($result['id_hewan_ternak']);?>" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="editModalLabel">Form Edit Data Hewan Ternak</h4>
															</div>
															<div class="modal-body">
																<form method="POST" action="module=hewan-ternak-edit">
																	<div class="col-sm-6">
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
																	<div class="col-sm-6">
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
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Populasi Sapi Perah (ekor)</b></label>
																			<div class="form-line">
																				<input type="hidden" name="id" value="<?php echo htmlentities($result['id_hewan_ternak']);?>">
																				<input type="number" name="produksi1" class="form-control" min=0 value="<?php echo $result['produksi1'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Produksi Sapi Perah (ton)</b></label>
																			<div class="form-line">
																				<input type="number" name="nilai1" class="form-control" min=0 value="<?php echo $result['nilai1'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Populasi Sapi Potong (ekor)</b></label>
																			<div class="form-line">
																				<input type="number" name="produksi2" class="form-control" min=0 value="<?php echo $result['produksi2'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Produksi Sapi Potong (ton)</b></label>
																			<div class="form-line">
																				<input type="number" name="nilai2" class="form-control" min=0 value="<?php echo $result['nilai2'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Populasi Kerbau (ekor)</b></label>
																			<div class="form-line">
																				<input type="number" name="produksi3" class="form-control" min=0 value="<?php echo $result['produksi3'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Produksi Kerbau (ton)</b></label>
																			<div class="form-line">
																				<input type="number" name="nilai3" class="form-control" min=0 value="<?php echo $result['nilai3'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Populasi Kuda (ekor)</b></label>
																			<div class="form-line">
																				<input type="number" name="produksi4" class="form-control" min=0 value="<?php echo $result['produksi4'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Produksi Kuda (ton)</b></label>
																			<div class="form-line">
																				<input type="number" name="nilai4" class="form-control" min=0 value="<?php echo $result['nilai4'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Populasi Kambing (ekor)</b></label>
																			<div class="form-line">
																				<input type="number" name="produksi5" class="form-control" min=0 value="<?php echo $result['produksi5'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Produksi Kambing (ton)</b></label>
																			<div class="form-line">
																				<input type="number" name="nilai5" class="form-control" min=0 value="<?php echo $result['nilai5'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Populasi Domba (ekor)</b></label>
																			<div class="form-line">
																				<input type="number" name="produksi6" class="form-control" min=0 value="<?php echo $result['produksi6'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Produksi Domba (ton)</b></label>
																			<div class="form-line">
																				<input type="number" name="nilai6" class="form-control" min=0 value="<?php echo $result['nilai6'];?>">
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
																window.location = 'ternak-del.php?id=<?php echo htmlentities($result['id_hewan_ternak']);?>';
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
											<td class="text-center"><?php echo number_format($total1, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total2, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total3, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total4, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total5, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total6, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total7, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total8, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total9, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total10, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total11, 0, ",", ".");?></td>
											<td class="text-center"><?php echo number_format($total12, 0, ",", ".");?></td>
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
	<?php include ('ternak-input.php'); ?>
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
				window.location = 'ternak-delall.php';
				}
			})
		}
	</script>
	<script>
		$('.sampai').select2({
        placeholder: "Pilih Tahun",
        allowClear: true
		});
		
		$('.tahun').select2({
        placeholder: "Pilih Tahun",
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