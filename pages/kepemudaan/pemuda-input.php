<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Pemuda</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="module=pemuda-input">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Pendidikan</b></label>
							<div class="form-line">
								<select class="form-control pendidikan" style="width:100%;" name="pendidikan" required>
								<option></option>
								<?php
									$mySql = "SELECT * FROM pendidikan ORDER BY id_pendidikan ASC";
									$myQry = mysqli_query($koneksidb, $mySql);
									while ($myData = mysqli_fetch_array($myQry)) {
										if ($myData['id_pendidikan']== $dataBahan) {
										$cek = " selected";
										} else { $cek=""; }
										echo "<option value='$myData[id_pendidikan]' $cek>$myData[pendidikan] </option>";
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
							<label class="form-control-label"><b>Jumlah Pemuda Laki-laki</b></label>
							<div class="form-line">
								<input type="number" name="laki_laki" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Pemuda Perempuan</b></label>
							<div class="form-line">
								<input type="number" name="perempuan" class="form-control" min=0 value="0">
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