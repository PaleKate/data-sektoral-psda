<aside id="leftsidebar" class="sidebar">
	<!-- Menu -->
	<div class="menu">
		<ul class="list">
			<li class="header">MENU UTAMA</li>
			<li <?php if($page == "dashboard") echo ("class='active'"); ?>>
				<a href="module=dashboard">
					<i class="material-icons">dashboard</i>
					<span>Dashboard</span>
				</a>
			</li>
			<li <?php if($page == "informasi") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">view_list</i>
					<span>Data Informasi</span>
				</a>
				<ul class="ml-menu">
					<li>
						<a href="javascript:void(0);">
							<span>Indikator Makro</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span>Luas Wilayah</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="header">DATA DINAS</li>
			<li <?php if($page == "disparpora") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DISPARPORA</span>
				</a>
				<ul class="ml-menu">
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Pariwisata</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Wisatawan</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Usaha Jasa Wisata</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Pemandu Wisata</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Hotel & Akomodasi</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Rumah Makan/Restoran</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Pemuda & Olahraga</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah Pemuda</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Prasarana Olahraga</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Organisasi Pemuda</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li <?php if($page == "diskopukmindag") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DISKOPUKMINDAG</span>
				</a>
				<ul class="ml-menu">
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Koperasi & UMKM</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah Koperasi & Anggota</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah UMKM</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Perdagangan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Pasar Kabupaten</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Pasar Desa</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Perindustrian</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah IKM</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah IKM Lainnya</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li <?php if($page == "dpkpp") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DPKPP</span>
				</a>
				<ul class="ml-menu">
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Pertanian</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="pages/atlet/atlet.php">
									<span>Komoditas</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Buah-buahan</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Perkebunan</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Kelautan & Perikanan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Perikanan Tangkap</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Perikanan Laut</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Perikanan Budidaya</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Perikanan Perairan Umum</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Produksi Benih Ikan</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Peternakan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Hewan Ternak</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Hewan Unggas</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Susu Sapi Perah</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li <?php if($page == "dpmptsptk") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DPMPTSPTK</span>
				</a>
				<ul class="ml-menu">
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Penanaman Modal</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Realisasi Investasi</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah NIB</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah Penerbitan NIB</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Tenaga Kerja</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah Pemohon Ak1</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah Tenaga Kerja BLK</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Transmigrasi</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);">
									<span>Jumlah Transmigran</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span>Pelatihan Calon Transmigran</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="header">LAINNYA</li>
			<li <?php if($page == "tahun") echo ("class='active'"); ?>>
				<a href="pages/tahun/tahun.php">
					<i class="material-icons">date_range</i>
					<span>Tahun</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- #Menu -->
</aside>