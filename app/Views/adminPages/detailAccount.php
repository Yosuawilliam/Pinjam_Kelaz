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
			<li>
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
			<li class="active">
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
			<div class="container-detail-ruangan">
				<div class="body-container-detail-ruangan">
					<div class="head">
						<h3>Profile</h3>
						<a href="<?= base_url("daftarAccount"); ?>">
							<i class='bx bi-x-lg'></i>
						</a>
					</div>

					<!-- Profile Section -->
					<section id="view-detail" class="view-detail">
						<div class="container" data-aos="fade-up">

							<div class="row justify-content-around gy-4 content-detail-account">
								<div class="col-lg-6 img-bg">
									<img src="img/<?= session()->get('user_foto_at_account'); ?>" alt="">
								</div>
								<div class="col-lg-5 d-flex flex-column container-detail-account">
									<h5>Nama Depan</h5>
									<div class="data-field-profile">
										<h6><?= session()->get('user_fname_account'); ?></h6>
									</div>
									<h5>Nama Belakang</h5>
									<div class="data-field-profile">
										<h6><?= session()->get('user_lname_account'); ?></h6>
									</div>
									<h5>Nim</h5>
									<div class="data-field-profile">
										<h6><?= session()->get('user_nim_account'); ?></h6>
									</div>
									<h5>Email address</h5>
									<div class="data-field-profile">
										<h6><?= session()->get('user_email_account'); ?></h6>
									</div>
									<h5>Statust User</h5>
									<div class="data-field-profile">
										<h6><?= session()->get('user_status_at_account'); ?></h6>
									</div>
									<div class="row container-for-btn">
										<div class="col-lg-6 d-flex flex-column">
											<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
												<a class="edit-pass textdecoration-none" href="" data-bs-toggle="modal" data-bs-target="#edit-statust-modal">Edit Status</a>
											</div>
										</div>
										<div class="col-lg-6 d-flex flex-column">
											<div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
												<form action="<?= base_url("deleteAccount"); ?>" method="POST">
													<input type="hidden" name="user_id" value="<?= session()->get('user_id_account'); ?>">
													<input type="submit" class="edit-pass textdecoration-none" value="Hapus Account">
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Profile Section -->

				</div>
			</div>
		</main>
		<!-- MAIN -->

		<!-- Modal Edit Password -->
		<div class="modal fade" id="edit-statust-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Status</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="<?= base_url("editAccount"); ?>" method="POST">
						<div class="modal-body-edit-status">
							<div class="col-lg-12 d-flex flex-column">
								<label for="cars">Edit Status:</label>
								<input type="hidden" name="user_id" value="<?= session()->get('user_id_account'); ?>">
								<select id="status" name="status">
									<option value="user">User</option>
									<option value="admin">Admin</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn btn-success">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Modal Edit Password -->


	</section>
	<!-- CONTENT -->

	<!-- framework JS Files -->
	<script src="../assets/framework/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/js/admin-script.js"></script>
</body>

</html>