<!-- Large Size -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Edit Data Organisasi Pemuda</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=organisasi-edit">
					<table class="display table table-striped table-bordered table-hover" width="100%" id="example-table" cellspacing="0">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Bidang Organisasi</th>
								<th class="text-center">Satuan</th>
								<?php 
									if(isset($_POST['cari'])){
										$dari = $_POST['dari'];
										$sampai = $_POST['sampai'];
										$sqlthn = "SELECT * FROM tahun WHERE tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}else{
									$sqlthn = "SELECT * FROM tahun WHERE tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
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
								<td>Olahraga</td>
								<td class="text-center">Organisasi</td>
								<?php 
									if(isset($_POST['cari'])){
										$dari = $_POST['dari'];
										$sampai = $_POST['sampai'];
										$sqlthn = "SELECT organisasi.*, tahun.* FROM organisasi, tahun WHERE 
												   organisasi.id_tahun=tahun.id_tahun AND 
												   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}else{
									$sqlthn = "SELECT organisasi.*, tahun.* FROM organisasi, tahun WHERE 
											   organisasi.id_tahun=tahun.id_tahun AND 
											   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center">
									<input type="hidden" name="id_organisasi[]" value="<?php echo htmlentities($result['id_organisasi']);?>">
									<input type="number" class="form-control" name="org_olahraga[]" min=0 value="<?php echo htmlentities($result['org_olahraga']);?>">
								</td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Sosial</td>
								<td class="text-center">Organisasi</td>
								<?php 
									if(isset($_POST['cari'])){
										$dari = $_POST['dari'];
										$sampai = $_POST['sampai'];
										$sqlthn = "SELECT organisasi.*, tahun.* FROM organisasi, tahun WHERE 
												   organisasi.id_tahun=tahun.id_tahun AND 
												   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}else{
									$sqlthn = "SELECT organisasi.*, tahun.* FROM organisasi, tahun WHERE 
											   organisasi.id_tahun=tahun.id_tahun AND 
											   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="org_sosial[]" min=0
											value="<?php echo htmlentities($result['org_sosial']);?>"></td>
									<?php }?>
							</tr>
						</tbody>
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