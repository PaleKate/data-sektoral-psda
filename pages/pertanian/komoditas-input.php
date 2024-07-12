<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Komoditas</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=komoditas-input">
					<div class="col-sm-4">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Jenis Komoditas</b></label>
							<div class="form-line">
								<select class="form-control jenis_komoditas" style="width:100%;" name="id_jenis_komoditas" required>
								<option></option>
								<?php
									$mySql = "SELECT * FROM jenis_komoditas ORDER BY jenis_komoditas ASC";
									$myQry = mysqli_query($koneksidb, $mySql);
									while ($myData = mysqli_fetch_array($myQry)) {
										if ($myData['id_jenis_komoditas']== $dataBahan) {
										$cek = " selected";
										} else { $cek=""; }
										echo "<option value='$myData[id_jenis_komoditas]' $cek>$myData[jenis_komoditas] </option>";
									}
								?>
							</select>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
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
					<div class="col-sm-4">
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
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Luas Tanam (ha)</b></label>
							<div class="form-line">
								<input type="number" name="luas_tanam" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Luas Panen (ha)</b></label>
							<div class="form-line">
								<input type="number" name="luas_panen" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Provitas (kw/ha)</b></label>
							<div class="form-line">
								<input type="number" name="provitas" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Produksi (ton)</b></label>
							<div class="form-line">
								<input type="number" name="produksi" class="form-control" min=0 value="0">
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