<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
			<a href="javascript:void(0);" class="bars"></a>
			<a class="navbar-brand" href="dashboard.php">Database PSDA | Administrator</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!-- Profile -->
				<li class="pull-right">
					<?php
						$id=$_SESSION['alogin'];
						$sql ="SELECT * FROM administrator WHERE id='$id'";
						$query = mysqli_query($koneksidb,$sql);
							while($results = mysqli_fetch_array($query)){
					?>
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
						<img src="../../images/profil/<?php echo $results['foto']; ?>" style="object-fit: cover; border-radius: 50%; height: 30px; width: 30px;" alt="User">
						<?php echo $results['username']; ?> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu pull-right">
						<li><a href="../profil/profil.php?id=<?php echo $results['id']; ?>"><i class="material-icons">person</i>Profil</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">settings</i>Pengaturan</a></li>
						<li role="seperator" class="divider"></li>
						<li><a href="javascript:void(0);"><i class="material-icons">input</i>Keluar</a></li>
					</ul>
					<?php }?>
				</li>
				<!-- #END# Profile -->
			</ul>
		</div>
	</div>
</nav>