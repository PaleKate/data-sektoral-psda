<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Koperasi</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=koperasi-input">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Jenis Koperasi</b></label>
							<div class="form-line">
								<select class="form-control jenis_koperasi" style="width:100%;" name="jenis_koperasi" required>
								<option></option>
								<?php
									$mySql = "SELECT * FROM jenis_koperasi";
									$myQry = mysqli_query($koneksidb, $mySql);
									while ($myData = mysqli_fetch_array($myQry)) {
										if ($myData['id_jenis_koperasi']== $dataBahan) {
										$cek = " selected";
										} else { $cek=""; }
										echo "<option value='$myData[id_jenis_koperasi]' $cek>$myData[jenis_koperasi] </option>";
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
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Koperasi Aktif</b></label>
							<div class="form-line">
								<input type="number" name="aktif" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Koperasi Tidak Aktif</b></label>
							<div class="form-line">
								<input type="number" name="nonaktif" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Manajer</b></label>
							<div class="form-line">
								<input type="number" name="manajer" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Karyawan</b></label>
							<div class="form-line">
								<input type="number" name="karyawan" class="form-control" min=0 value="0">
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