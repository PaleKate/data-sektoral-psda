<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Perkebunan</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=kebun-input">
					<div class="col-sm-4">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Jenis Kebun</b></label>
							<div class="form-line">
								<select class="form-control jenis_kebun" style="width:100%;" name="id_jenis_kebun" required>
								<option></option>
								<?php
									$mySql = "SELECT * FROM jenis_kebun ORDER BY jenis_kebun ASC";
									$myQry = mysqli_query($koneksidb, $mySql);
									while ($myData = mysqli_fetch_array($myQry)) {
										if ($myData['id_jenis_kebun']== $dataBahan) {
										$cek = " selected";
										} else { $cek=""; }
										echo "<option value='$myData[id_jenis_kebun]' $cek>$myData[jenis_kebun] </option>";
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
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Panen (Pohon)</b></label>
							<div class="form-line">
								<input type="number" name="panen" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Produksi (ton)</b></label>
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