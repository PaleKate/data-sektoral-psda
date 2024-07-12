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
<?php $page = "blk"; ?>
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
									$sqlkat = "SELECT tenaga_kerja.*, tahun.* 
											   FROM tenaga_kerja, tahun WHERE 
											   tenaga_kerja.id_tahun=tahun.id_tahun AND 
											   tahun.tahun='$sampai'";
									$querykat = mysqli_query($koneksidb,$sqlkat);
									$tahun = mysqli_fetch_array($querykat);
							?>
							<h2>
                                Data Jumlah Calon Tenaga Kerja yang Mendapatkan Pelatihan di Kabupaten Tasikmalaya Tahun <?php echo $tahun['tahun']; ?>
                            </h2>
							<?php }else{ ?>
							<h2>
                                Data Jumlah Calon Tenaga Kerja yang Mendapatkan Pelatihan di Kabupaten Tasikmalaya
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
											<th class="text-center">Laki-laki (Orang)</th>
											<th class="text-center">Perempuan (Orang)</th>
											<th class="text-center">Act</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$nomor=0;
											if(isset($_POST['cari'])){
												$dari = $_POST['dari'];
												$sampai = $_POST['sampai'];
												$sqlthn = "SELECT tenaga_kerja.*, kecamatan.*, tahun.* FROM tenaga_kerja, kecamatan, tahun WHERE 
														   tenaga_kerja.id_kecamatan=kecamatan.id_kecamatan AND 
														   tenaga_kerja.id_tahun=tahun.id_tahun AND 
														   tahun.tahun='$sampai' ORDER BY kecamatan.kecamatan ASC";
											}else{
											$sqlthn = "SELECT tenaga_kerja.*, kecamatan.*, tahun.* FROM tenaga_kerja, kecamatan, tahun WHERE 
													   tenaga_kerja.id_kecamatan=kecamatan.id_kecamatan AND 
													   tenaga_kerja.id_tahun=tahun.id_tahun AND 
													   tahun.tahun='$sampai' ORDER BY kecamatan.kecamatan ASC";
											}
											$querythn = mysqli_query($koneksidb,$sqlthn);
											while ($result = mysqli_fetch_array($querythn)){
													$total += $result['tk_laki'];
													$total2 += $result['tk_perempuan'];
													$nomor++;
										?>
										<tr>
											<td class="text-center"><?php echo $nomor;?></td>
											<td><?php echo $result['kecamatan'];?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['tk_laki'], 0, ",", "."));?></td>
											<td class="text-center"><?php echo htmlentities(number_format($result['tk_perempuan'], 0, ",", "."));?></td>
											<td class="text-center">
												<button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" 
														data-toggle="modal" data-target="#editModal<?php echo htmlentities($result['id_tenaga_kerja']);?>">
													<i class="material-icons">mode_edit</i>
												</button>&nbsp;&nbsp;
												<!-- Large Size -->
												<div class="modal fade" id="editModal<?php echo htmlentities($result['id_tenaga_kerja']);?>" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="editModalLabel">Form Edit Data Calon Tenaga Kerja</h4>
															</div>
															<div class="modal-body">
																<form method="POST" action="module=tenaga-kerja-blk-edit">
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
																			<label class="form-control-label" style="float:left;"><b>Jumlah Calon Tenaga Kerja Laki-laki</b></label>
																			<div class="form-line">
																				<input type="hidden" name="id" value="<?php echo htmlentities($result['id_tenaga_kerja']);?>">
																				<input type="number" name="tk_laki" class="form-control" min=0 value="<?php echo $result['tk_laki'];?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label class="form-control-label" style="float:left;"><b>Jumlah Calon Tenaga Kerja Perempuan</b></label>
																			<div class="form-line">
																				<input type="number" name="tk_perempuan" class="form-control" min=0 value="<?php echo $result['tk_perempuan'];?>">
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
																window.location = 'tenaga-kerja-del.php?id=<?php echo htmlentities($result['id_tenaga_kerja']);?>';
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
	<?php include ('tenaga-kerja-input.php'); ?>
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
				window.location = 'tenaga-kerja-delall.php';
				}
			})
		}
	</script>
	<script>
		$('.dari').select2({
        placeholder: "Pilih Komoditas",
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