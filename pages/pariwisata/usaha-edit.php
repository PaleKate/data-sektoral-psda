<!-- Large Size -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Edit Data Jumlah Usaha Jasa Wisata</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=usaha-jasa-wisata-edit">
					<table class="display table table-striped table-bordered table-hover" width="100%" id="example-table" cellspacing="0">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Jenis Usaha</th>
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
								<td>Jumlah Biro Wisata</td>
								<td class="text-center">Unit Usaha</td>
								<?php 
									if(isset($_POST['cari'])){
										$dari = $_POST['dari'];
										$sampai = $_POST['sampai'];
										$sqlthn = "SELECT usaha_wisata.*, tahun.* FROM usaha_wisata, tahun WHERE 
												   usaha_wisata.id_tahun=tahun.id_tahun AND 
												   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}else{
									$sqlthn = "SELECT usaha_wisata.*, tahun.* FROM usaha_wisata, tahun WHERE 
											   usaha_wisata.id_tahun=tahun.id_tahun AND 
											   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center">
									<input type="hidden" name="id_usaha_wisata[]" value="<?php echo htmlentities($result['id_usaha_wisata']);?>">
									<input type="number" class="form-control" name="biro[]" min=0 value="<?php echo htmlentities($result['biro']);?>">
								</td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Jumlah Agen Perjalanan Wisata</td>
								<td class="text-center">Unit Usaha</td>
								<?php 
									if(isset($_POST['cari'])){
										$dari = $_POST['dari'];
										$sampai = $_POST['sampai'];
										$sqlthn = "SELECT usaha_wisata.*, tahun.* FROM usaha_wisata, tahun WHERE 
												   usaha_wisata.id_tahun=tahun.id_tahun AND 
												   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}else{
									$sqlthn = "SELECT usaha_wisata.*, tahun.* FROM usaha_wisata, tahun WHERE 
											   usaha_wisata.id_tahun=tahun.id_tahun AND 
											   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
									}
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="agen[]" min=0
											value="<?php echo htmlentities($result['agen']);?>"></td>
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