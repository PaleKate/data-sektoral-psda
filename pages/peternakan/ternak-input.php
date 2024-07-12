<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Hewan Ternak</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=hewan-ternak-input">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Kecamatan</b></label>
							<div class="form-line">
								<select class="form-control kecamatan" style="width:100%;" name="kecamatan" required>
								<option></option>
								<?php
									$mySql = "SELECT * FROM kecamatan ORDER BY kecamatan ASC";
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
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Populasi Sapi Perah (ekor)</b></label>
							<div class="form-line">
								<input type="number" name="produksi1" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Produksi Sapi Perah (ton)</b></label>
							<div class="form-line">
								<input type="number" name="nilai1" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Populasi Sapi Potong (ekor)</b></label>
							<div class="form-line">
								<input type="number" name="produksi2" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Produksi Sapi Potong (ton)</b></label>
							<div class="form-line">
								<input type="number" name="nilai2" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Populasi Kerbau (ekor)</b></label>
							<div class="form-line">
								<input type="number" name="produksi3" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Produksi Kerbau (ton)</b></label>
							<div class="form-line">
								<input type="number" name="nilai3" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Populasi Kuda (ekor)</b></label>
							<div class="form-line">
								<input type="number" name="produksi4" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Produksi Kuda (ton)</b></label>
							<div class="form-line">
								<input type="number" name="nilai4" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Populasi Kambing (ekor)</b></label>
							<div class="form-line">
								<input type="number" name="produksi5" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Produksi Kambing (ton)</b></label>
							<div class="form-line">
								<input type="number" name="nilai5" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Populasi Domba (ekor)</b></label>
							<div class="form-line">
								<input type="number" name="produksi6" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label" style="float:left;"><b>Produksi Domba (ton)</b></label>
							<div class="form-line">
								<input type="number" name="nilai6" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary waves-effect" name="submit">SUBMIT</button>
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
				</form>
		</div>
	</div>
</div>