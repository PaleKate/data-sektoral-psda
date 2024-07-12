<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Prasarana Olahraga</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=olahraga-input">
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Voli Outdoor</b></label>
							<div class="form-line">
								<input type="number" name="voli_out" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Voli Indoor</b></label>
							<div class="form-line">
								<input type="number" name="voli_in" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Basket</b></label>
							<div class="form-line">
								<input type="number" name="basket" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Tenis Meja</b></label>
							<div class="form-line">
								<input type="number" name="tenis_meja" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Tenis Lapang</b></label>
							<div class="form-line">
								<input type="number" name="tenis_lapang" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Futsal</b></label>
							<div class="form-line">
								<input type="number" name="futsal" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Sepak Bola</b></label>
							<div class="form-line">
								<input type="number" name="bola" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Bulu Tangkis</b></label>
							<div class="form-line">
								<input type="number" name="bultang" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Gedung Olahraga</b></label>
							<div class="form-line">
								<input type="number" name="gd_olahraga" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Kolam Renang</b></label>
							<div class="form-line">
								<input type="number" name="kolam" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Sasana Tinju/Beladiri</b></label>
							<div class="form-line">
								<input type="number" name="tinju" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Motor Cross</b></label>
							<div class="form-line">
								<input type="number" name="motor" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Fitness</b></label>
							<div class="form-line">
								<input type="number" name="fitness" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Mini Soccer</b></label>
							<div class="form-line">
								<input type="number" name="mini_soccer" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Tahun</b></label>
							<div class="form-line">
								<select class="form-control tahun" style="width:100%;" name="tahun" required>
								<option></option>
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
			</div>
			<div class="modal-footer">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-primary waves-effect" name="submit">SUBMIT</button>
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
			</div>
				</form>
		</div>
	</div>
</div>