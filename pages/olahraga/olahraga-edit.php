<!-- Large Size -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Edit Data Jumlah Pemandu Wisata</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=olahraga-edit">
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
									$sqlthn = "SELECT olahraga.*, tahun.* FROM olahraga, tahun WHERE 
											   olahraga.id_tahun=tahun.id_tahun AND 
											   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
								}else{
								$sqlthn = "SELECT olahraga.*, tahun.* FROM olahraga, tahun WHERE 
										   olahraga.id_tahun=tahun.id_tahun AND 
										   tahun.tahun BETWEEN '$dari' AND '$sampai' ORDER BY tahun ASC limit 5";
								}
							?>
							<tr><?php $nomor = 1; ?>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Voli Outdoor</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center">
									<input type="hidden" name="id_olahraga[]" value="<?php echo htmlentities($result['id_olahraga']);?>">
									<input type="number" class="form-control" name="voli_out[]" min=0 value="<?php echo $result['voli_out'];?>">
								</td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Voli Indoor</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="voli_in[]" min=0 value="<?php echo $result['voli_in'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Basket</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="basket[]" min=0 value="<?php echo $result['basket'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Tenis Meja</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="tenis_meja[]" min=0 value="<?php echo $result['tenis_meja'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Tenis Lapang</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="tenis_lapang[]" min=0 value="<?php echo $result['tenis_lapang'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Futsal</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="futsal[]" min=0 value="<?php echo $result['futsal'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Sepak Bola</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="bola[]" min=0 value="<?php echo $result['bola'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Bulu Tangkis</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="bultang[]" min=0 value="<?php echo $result['bultang'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Gedung Olahraga</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="gd_olahraga[]" min=0 value="<?php echo $result['gd_olahraga'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Kolam Renang</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="kolam[]" min=0 value="<?php echo $result['kolam'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Sasana Tinju/Beladiri</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="tinju[]" min=0 value="<?php echo $result['tinju'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Motor Cross</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="motor[]" min=0 value="<?php echo $result['motor'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Fitness</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="fitness[]" min=0 value="<?php echo $result['fitness'];?>"></td>
									<?php }?>
							</tr>
							<tr>
								<td class="text-center"><?php echo $nomor++;?></td>
								<td>Mini Soccer</td>
								<td class="text-center">Unit</td>
								<?php
									$querythn = mysqli_query($koneksidb,$sqlthn);
									while ($result = mysqli_fetch_array($querythn)){
								?>
								<td class="text-center"><input type="number" class="form-control" name="mini_soccer[]" min=0 value="<?php echo $result['mini_soccer'];?>"></td>
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