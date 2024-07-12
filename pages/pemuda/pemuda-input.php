<!-- Large Size -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="inputModalLabel">Form Input Data Kepemudaan</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="pemuda-inputact.php">
					<div class="col-sm-4">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Pemuda</b></label>
							<div class="form-line">
								<input type="number" name="pemuda" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Organisasi</b></label>
							<div class="form-line">
								<input type="number" name="org" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label class="form-control-label"><b>Jumlah Organisasi yang Aktif</b></label>
							<div class="form-line">
								<input type="number" name="org_aktif" class="form-control" min=0 value="0">
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label class="form-control-label"><b>Pilih Tahun Tahun</b></label>
							<div class="form-line">
								<select class="form-control tahun" style="width:100%;" name="tahun" required>
								<option></option>
								<?php
									$mySql = "SELECT * FROM tahun ORDER BY tahun";
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
				<button type="submit" class="btn btn-primary waves-effect" name="submit">SUBMIT</button>
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
				</form>
		</div>
	</div>
</div>