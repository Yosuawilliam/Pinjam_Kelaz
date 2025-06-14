<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link href="../assets/img/icon.png" rel="icon">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- Main CSS File -->
	<link href="../assets/css/admin-style.css" rel="stylesheet">

	<title>AdminHub</title>
	<!-- framework CSS Files -->
	<link href="../assets/framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/framework/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="<?= base_url('dashboard'); ?>" class="brand textdecoration-none">
			<div class="nav-logo">
				<img src="../assets/img/icon.png">
				<span>Admin Page</span>
			</div>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="<?= base_url('dashboard'); ?>" class="textdecoration-none">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="<?= base_url("semuaRuangan"); ?>" class="textdecoration-none">
					<i class='bx bi bi-building'></i>
					<span class="text">Semua Ruangan</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('ruanganTerpakai'); ?>" class="textdecoration-none">
					<i class='bx bi bi-building-fill-lock'></i>
					<span class="text">Ruangan Terpakai</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('ruanganTidakTerpakai'); ?>" class="textdecoration-none">
					<i class='bx bi bi-building-fill-exclamation'></i>
					<span class="text">Ruangan Tidak Terpakai</span>
				</a>
			</li>
			<!-- <li>
				<a href="ruanganTerpinjam.html" class="textdecoration-none">
					<i class='bx bi bi-building-check'></i>
					<span class="text">Ruangan Terpinjam</span>
				</a>
			</li> -->
			<li>
				<a href="<?= base_url("allnotifikasi"); ?>" class="textdecoration-none">
					<i class='bx bi bi-bell'></i>
					<span class="text">Notifikasi</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url("daftarAccount"); ?>" class="textdecoration-none">
					<i class="bx bi bi-person-circle"></i>
					<span class="text">Daftar Acount</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu" class="textdecoration-none">
			<li>
				<a href="<?= base_url('logout'); ?>" class="logout textdecoration-none">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="container-form">
				<div class="body-container-form">
					<div class="head">
						<h3>Tambah Ruangan</h3>
						<a href="<?= base_url("semuaRuangan"); ?>">
							<i class='bx bi-x-lg'></i>
						</a>
					</div>

					<form action="<?= base_url("addRuangan"); ?>" method="POST" enctype="multipart/form-data">
						<div class="container-form-field">
							<span>Lantai Kelas :</span>
							<select id="lantai_kelas" name="lantai_kelas" class="container-form-field">
								<option value="lantai1">Lantai 1</option>
								<option value="lantai2">Lantai 2</option>
								<option value="lantai3">Lantai 3</option>
								<option value="lantai4">Lantai 4</option>
								<option value="lantai5">Lantai 5</option>
								<option value="lantai6">Lantai 6</option>
								<option value="lantai7">Lantai 7</option>
								<option value="lantai8">Lantai 8</option>
							</select>
						</div>
						<div class="container-form-field">
							<span>No Kelas :</span>
							<input type="text" name="no_kelas">
						</div>
						<div class="container-form-field">
							<span>Lokasi Kelas :</span>
							<input type="text" name="alamat_kelas">
						</div>
						<div class="container-form-field">
							<span>Photo Kelas :</span>
							<input type="file" accept="image/*" name="foto_kelas">
						</div>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<!-- End first day -->
						<div class="btn-submit">
							<input type="submit">
						</div>
						<br>
						<br>
					</form>
				</div>
			</div>



		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script>
		function validateForm() {
			var inputs = document.getElementsByTagName('input');

			for (var i = 0; i < inputs.length; i++) {
				if (inputs[i].type !== 'submit' && inputs[i].value === '') {
					alert('Pastikan semua input terisi!');
					return false;
				}
			}

			return true;
		}

		// Mengaitkan fungsi validateForm() dengan event onSubmit pada form
		document.querySelector('form').onsubmit = function() {
			return validateForm();
		};
	</script>


	<script src="../assets/js/admin-script.js"></script>
</body>

</html>