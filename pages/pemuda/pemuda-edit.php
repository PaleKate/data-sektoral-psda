<!-- Large Size -->
<div class="modal fade" id="editPemudaModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Edit Data Kepemudaan</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="pemuda-editact.php">
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
								<th class="text-center" width="100"><?php echo htmlentities($result['tahun']);?></th>
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
								<td class="text-center">
									<input type="hidden" name="id_pemuda[]" value="<?php echo htmlentities($result['id_pemuda']);?>">
									<input type="number" class="form-control" name="pemuda[]" min=0
											value="<?php echo htmlentities($result['pemuda']);?>">
								</td>
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
								<td class="text-center">
									<input type="number" class="form-control" name="org[]" min=0
											value="<?php echo htmlentities($result['org']);?>">
								</td>
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
								<td class="text-center">
									<input type="number" class="form-control" name="org_aktif[]" min=0
											value="<?php echo htmlentities($result['org_aktif']);?>">
								</td>
									<?php }?>
							</tr>
					</table>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary waves-effect" name="submit">UPDATE</button>
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
				</form>
		</div>
	</div>
</div>