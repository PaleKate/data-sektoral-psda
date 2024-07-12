<aside id="leftsidebar" class="sidebar">
	<!-- Menu -->
	<div class="menu">
		<ul class="list">
			<li class="header">MENU UTAMA</li>
			<li <?php if($page == "dashboard") echo ("class='active'"); ?>>
				<a href="../../module=dashboard">
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
			<li <?php if($page == "wisatawan" || $page == "usaha-wisata" || $page == "pemandu" || $page == "hotel" || $page == "rumah-makan" || $page == "pemuda" || $page == "olahraga" || $page == "organisasi") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DISPARPORA</span>
				</a>
				<ul class="ml-menu">
					<li <?php if($page == "wisatawan" || $page == "usaha-wisata" || $page == "pemandu" || $page == "hotel" || $page == "rumah-makan") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Pariwisata</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "wisatawan") echo ("class='active'"); ?>>
								<a href="../../pages/pariwisata/module=wisatawan">
									<span>Wisatawan</span>
								</a>
							</li>
							<li <?php if($page == "usaha-wisata") echo ("class='active'"); ?>>
								<a href="../../pages/pariwisata/module=usaha-jasa-wisata">
									<span>Usaha Jasa Wisata</span>
								</a>
							</li>
							<li <?php if($page == "pemandu") echo ("class='active'"); ?>>
								<a href="../../pages/pariwisata/module=pemandu">
									<span>Pemandu Wisata</span>
								</a>
							</li>
							<li <?php if($page == "hotel") echo ("class='active'"); ?>>
								<a href="../../pages/pariwisata/module=hotel">
									<span>Hotel & Akomodasi</span>
								</a>
							</li>
							<li <?php if($page == "rumah-makan") echo ("class='active'"); ?>>
								<a href="../../pages/pariwisata/module=rumah-makan">
									<span>Rumah Makan/Restoran</span>
								</a>
							</li>
						</ul>
					</li>
					<li <?php if($page == "pemuda" || $page == "olahraga" || $page == "organisasi") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Pemuda & Olahraga</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "pemuda") echo ("class='active'"); ?>>
								<a href="../../pages/kepemudaan/module=pemuda">
									<span>Jumlah Pemuda</span>
								</a>
							</li>
							<li <?php if($page == "olahraga") echo ("class='active'"); ?>>
								<a href="../../pages/olahraga/module=olahraga">
									<span>Prasarana Olahraga</span>
								</a>
							</li>
							<li <?php if($page == "organisasi") echo ("class='active'"); ?>>
								<a href="../../pages/kepemudaan/module=organisasi">
									<span>Organisasi Pemuda</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li <?php if($page == "koperasi" || $page == "umkm" || $page == "pasar-tradisional" || $page == "pasar-modern" || $page == "ikm" || $page == "ikm-lainnya") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DISKOPUKMINDAG</span>
				</a>
				<ul class="ml-menu">
					<li <?php if($page == "koperasi" || $page == "umkm") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Koperasi & UMKM</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "koperasi") echo ("class='active'"); ?>>
								<a href="../../pages/koperasi/module=koperasi">
									<span>Jumlah Koperasi & Anggota</span>
								</a>
							</li>
							<li <?php if($page == "umkm") echo ("class='active'"); ?>>
								<a href="../../pages/umkm/module=umkm">
									<span>Jumlah UMKM</span>
								</a>
							</li>
						</ul>
					</li>
					<li <?php if($page == "pasar-tradisional" || $page == "pasar-modern") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Perdagangan</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "pasar-tradisional") echo ("class='active'"); ?>>
								<a href="../../pages/perdagangan/module=pasar-tradisional">
									<span>Pasar Kabupaten</span>
								</a>
							</li>
							<li <?php if($page == "pasar-modern") echo ("class='active'"); ?>>
								<a href="../../pages/perdagangan/module=pasar-modern">
									<span>Pasar Desa</span>
								</a>
							</li>
						</ul>
					</li>
					<li <?php if($page == "ikm" || $page == "ikm-lainnya") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Perindustrian</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "ikm") echo ("class='active'"); ?>>
								<a href="../../pages/perindustrian/module=ikm">
									<span>Jumlah IKM</span>
								</a>
							</li>
							<li <?php if($page == "ikm-lainnya") echo ("class='active'"); ?>>
								<a href="javascript:void(0);">
									<span>Jumlah IKM Lainnya</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li <?php if($page == "komoditas" || $page == "buah" || $page == "kebun" || $page == "tangkap" || $page == "laut" || $page == "umum" || $page == "budidaya" || $page == "benih" || $page == "ternak" || $page == "unggas" || $page == "telur" || $page == "susu") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DPKPP</span>
				</a>
				<ul class="ml-menu">
					<li <?php if($page == "komoditas" || $page == "buah" || $page == "kebun") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Pertanian</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "komoditas") echo ("class='active'"); ?>>
								<a href="../../pages/pertanian/module=komoditas">
									<span>Komoditas</span>
								</a>
							</li>
							<li <?php if($page == "buah") echo ("class='active'"); ?>>
								<a href="../../pages/pertanian/module=buah">
									<span>Buah-buahan</span>
								</a>
							</li>
							<li <?php if($page == "kebun") echo ("class='active'"); ?>>
								<a href="../../pages/pertanian/module=kebun">
									<span>Perkebunan</span>
								</a>
							</li>
						</ul>
					</li>
					<li <?php if($page == "tangkap" || $page == "laut" || $page == "umum" || $page == "budidaya" || $page == "benih") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Kelautan & Perikanan</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "tangkap") echo ("class='active'"); ?>>
								<a href="../../pages/perikanan/module=perikanan-tangkap">
									<span>Perikanan Tangkap</span>
								</a>
							</li>
							<li <?php if($page == "laut") echo ("class='active'"); ?>>
								<a href="../../pages/perikanan/module=perikanan-laut">
									<span>Perikanan Laut</span>
								</a>
							</li>
							<li <?php if($page == "umum") echo ("class='active'"); ?>>
								<a href="../../pages/perikanan/module=perikanan-umum">
									<span>Perikanan Perairan Umum</span>
								</a>
							</li>
							<li <?php if($page == "budidaya") echo ("class='active'"); ?>>
								<a href="../../pages/perikanan/module=perikanan-budidaya">
									<span>Perikanan Budidaya</span>
								</a>
							</li>
							<li <?php if($page == "benih") echo ("class='active'"); ?>>
								<a href="../../pages/perikanan/module=benih">
									<span>Produksi Benih Ikan</span>
								</a>
							</li>
						</ul>
					</li>
					<li <?php if($page == "ternak" || $page == "unggas" || $page == "telur" || $page == "susu") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Peternakan</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "ternak") echo ("class='active'"); ?>>
								<a href="../../pages/peternakan/module=hewan-ternak">
									<span>Hewan Ternak</span>
								</a>
							</li>
							<li <?php if($page == "unggas") echo ("class='active'"); ?>>
								<a href="../../pages/peternakan/module=hewan-unggas">
									<span>Hewan Unggas</span>
								</a>
							</li>
							<li <?php if($page == "telur") echo ("class='active'"); ?>>
								<a href="../../pages/peternakan/module=telur">
									<span>Produksi Telur</span>
								</a>
							</li>
							<li <?php if($page == "susu") echo ("class='active'"); ?>>
								<a href="../../pages/peternakan/module=susu">
									<span>Produksi Susu</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li <?php if($page == "investasi" || $page == "nib" || $page == "ak1" || $page == "blk" || $page == "transmigran") echo ("class='active'"); ?>>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">near_me</i>
					<span>DPMPTSPTK</span>
				</a>
				<ul class="ml-menu">
					<li <?php if($page == "investasi" || $page == "nib") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Penanaman Modal</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "investasi") echo ("class='active'"); ?>>
								<a href="../../pages/modal/module=investasi">
									<span>Realisasi Investasi</span>
								</a>
							</li>
							<li <?php if($page == "nib") echo ("class='active'"); ?>>
								<a href="../../pages/modal/module=nib">
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
					<li <?php if($page == "blk" || $page == "blk") echo ("class='active'"); ?>>
						<a href="javascript:void(0);" class="menu-toggle">
							<span>Tenaga Kerja</span>
						</a>
						<ul class="ml-menu">
							<li <?php if($page == "ak1") echo ("class='active'"); ?>>
								<a href="../../pages/tenaga-kerja/module=pemohon-kerja">
									<span>Jumlah Pemohon Ak1</span>
								</a>
							</li>
							<li <?php if($page == "blk") echo ("class='active'"); ?>>
								<a href="../../pages/tenaga-kerja/module=tenaga-kerja-blk">
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
				<a href="../../pages/tahun/tahun.php">
					<i class="material-icons">date_range</i>
					<span>Tahun</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- #Menu -->
</aside>