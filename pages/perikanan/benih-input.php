<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Produksi Benih Ikan</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=benih-input">
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Mas</b></label>
							<div class="form-line">
								<input type="number" name="mas" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Nila</b></label>
							<div class="form-line">
								<input type="number" name="nila" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Nilem</b></label>
							<div class="form-line">
								<input type="number" name="nilem" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Mujair</b></label>
							<div class="form-line">
								<input type="number" name="mujair" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Gurame</b></label>
							<div class="form-line">
								<input type="number" name="gurame" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Tawes</b></label>
							<div class="form-line">
								<input type="number" name="tawes" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Lele</b></label>
							<div class="form-line">
								<input type="number" name="lele" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Sapat Siam</b></label>
							<div class="form-line">
								<input type="number" name="sapat" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Tambakan</b></label>
							<div class="form-line">
								<input type="number" name="tambakan" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Ikan Lainnya</b></label>
							<div class="form-line">
								<input type="number" name="lainnya" class="form-control" min=0 value="0">
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