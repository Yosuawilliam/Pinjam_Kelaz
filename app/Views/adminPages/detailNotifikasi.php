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
		<a href="#" class="brand textdecoration-none">
			<div class="nav-logo">
				<img src="../assets/img/icon.png">
				<span>Admin Page</span>
			</div>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="dashboard.html" class="textdecoration-none">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="semuaRuangan.html" class="textdecoration-none">
					<i class='bx bi bi-building'></i>
					<span class="text">Semua Ruangan</span>
				</a>
			</li>
			<li>
				<a href="ruanganTerpakai.html" class="textdecoration-none">
					<i class='bx bi bi-building-fill-lock'></i>
					<span class="text">Ruangan Terpakai</span>
				</a>
			</li>
			<li>
				<a href="ruanganTidakTerpakai.html" class="textdecoration-none">
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
			<li class="active">
				<a href="<?= base_url("allnotifikasi"); ?>" class="textdecoration-none">
					<i class='bx bi bi-bell'></i>
					<span class="text">Notifikasi</span>
				</a>
			</li>
			<li>
				<a href="daftarAccount.html" class="textdecoration-none">
					<i class="bx bi bi-person-circle"></i>
					<span class="text">Daftar Acount</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu" class="textdecoration-none">
			<li>
				<a href="../index.html" class="logout textdecoration-none">
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
						<h3>Detail Notifikasi</h3>
						<a href="<?= base_url('allnotifikasi'); ?>">
							<i class='bx bi-x-lg'></i>
						</a>
					</div>
					<div class="container-form-field">
						<span>Ruangan Kelas :</span>
						<input type="text" placeholder="<?= $data_no_kelas; ?>" disabled>
					</div>
					<div class="container-form-field">
						<span>Tanggal Peminjaman :</span>
						<input type="text" placeholder="<?= $data_tanggal_peminjaman; ?>" disabled>
					</div>
					<div class="container-form-field">
						<span>Status Pinjaman :</span>
						<input type="text" placeholder="<?= $data_status_peminjaman; ?>" disabled>
					</div>
					<div class="container-form-field">
						<div class="head">
							<h3>Detail Peminjaman</h3>
						</div>

						<span>Nama</span>
						<input type="text" placeholder="<?= $data_username; ?>" disabled>
						<span>NIM</span>
						<input type="text" placeholder="<?= $data_nim; ?>" disabled>
						<span>Email</span>
						<input type="text" placeholder="<?= $data_email; ?>" disabled>
						<span>Waktu Pinjaman</span>
						<input type="text" placeholder="<?= $data_jadwal; ?>" disabled>
						<span>Keterangan</span>
						<textarea name="" id="" cols="30" rows="10" placeholder="<?= $data_keterangan; ?>" disabled></textarea>
					</div>
					<?php if ($data_status_peminjaman == "Menunggu Verifikasi") { ?>
						<div class="icon-box d-flex position-relative">
							<!-- <a class="btn-addroom textdecoration-none" href="editRuangan.html">Tolak</a> -->
							<!-- <a class="btn-addroom textdecoration-none" href="tambahJadwalRuangan.html">Verifikasi</a> -->
							<form action="<?= base_url("rejectedNotifikasi"); ?>" method="POST">
								<input type="hidden" name="notifikasi_id" value="<?= $data_id_notifikasi; ?>">
								<input type="submit" class="btn-addroom textdecoration-none" value="Tolak">
							</form>
							<form action="<?= base_url("verification"); ?>" method="POST">
								<input type="hidden" name="notifikasi_id" value="<?= $data_id_notifikasi; ?>">
								<input type="submit" class="btn-addroom textdecoration-none" value="Verifikasi">
							</form>
						</div>
					<?php } ?>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../assets/js/admin-script.js"></script>
</body>

</html>