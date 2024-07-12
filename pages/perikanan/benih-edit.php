<!-- Large Size -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Edit Data Produksi Benih Ikan</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=benih-edit">
					<table class="display table table-striped table-bordered table-hover" width="100%" id="example-table" cellspacing="0">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Jenis Prasarana</th>
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
							<?php 
								if(isset($_POST['cari'])){
									$dari = $_POST['dari'];
									$sampai = $_POST['sampai'];
									$sqlthn = "SELECT benih.*, tahun.* FROM benih, tahun WHERE 
											   benih.id_tahun=tahun.id_tahun AND 
											   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
								}else{
								$sqlthn = "SELECT benih.*, tahun.* FROM benih, tahun WHERE 
										   benih.id_tahun=tahun.id_tahun AND 
										   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
								}
							?>
							<tr><?php $nomor = 1; ?>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Mas</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center">
									<input type="hidden" name="id_benih[]" value="<?php echo htmlentities($result['id_benih']);?>">
									<input type="number" class="form-control" name="mas[]" min=0 value="<?php echo $result['mas'];?>">
								</td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Nila</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="nila[]" min=0 value="<?php echo $result['nila'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Nilem</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="nilem[]" min=0 value="<?php echo $result['nilem'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Mujair</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="mujair[]" min=0 value="<?php echo $result['mujair'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Gurame</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="gurame[]" min=0 value="<?php echo $result['gurame'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Tawes</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="tawes[]" min=0 value="<?php echo $result['tawes'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Lele</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="lele[]" min=0 value="<?php echo $result['lele'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Sapat Siam</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="sapat[]" min=0 value="<?php echo $result['sapat'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Tambakan</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="tambakan[]" min=0 value="<?php echo $result['tambakan'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Ikan Lainnya</td>
								<td class="text-center">Ekor</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="lainnya[]" min=0 value="<?php echo $result['lainnya'];?>"></td>
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