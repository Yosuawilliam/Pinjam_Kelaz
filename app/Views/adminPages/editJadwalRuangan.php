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
						<h3>Edit Jadwal Ruangan <?= session()->get('data_jadwal_no_kelas'); ?></h3>
						<a href="<?= base_url('semuaRuangan'); ?>">
							<i class='bx bi-x-lg'></i>
						</a>
					</div>
					<h5>Jadwal Ruangan</h5>
					<p>Jadwal ruangan hanya dapat di tambahkan untuk 1 hari,<br> jika ingin menambahkan ke hari berikutnya dapat <br> menambahkan di edit ruangan. Dan untuk kolom jam di <br> kosongkan jika tidak ada jadwal</p>
					<!-- Start first day -->
					<form action="<?= base_url("editJadwalRuangan/save"); ?>" method="post">
						<input type="hidden" name="jadwal_id" value="<?= session()->get('data_jadwal_id'); ?>">
						<!-- Start first day -->
						<div class="container-form-field">
							<span>Tanggal <?= session()->get('data_jadwal_tanggal'); ?> : </span>
							<input type="date" name="date" value="<?= session()->get('data_jadwal_tanggal'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 06:30-07:30 Am</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="6_7_mataKuliah" value="<?= session()->get('data_jadwal_mk_6_7'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="6_7_dosen" value="<?= session()->get('data_jadwal_cd_6_7'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 07:30-08:30 Am</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="7_8_mataKuliah" value="<?= session()->get('data_jadwal_mk_7_8'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="7_8_dosen" value="<?= session()->get('data_jadwal_cd_7_8'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 08:30-09:30 Am</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="8_9_mataKuliah" value="<?= session()->get('data_jadwal_mk_8_9'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="8_9_dosen" value="<?= session()->get('data_jadwal_cd_8_9'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 09:30-10:30 Am</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="9_10_mataKuliah" value="<?= session()->get('data_jadwal_mk_9_10'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="9_10_dosen" value="<?= session()->get('data_jadwal_cd_9_10'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 10:30-11:30 Am</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="10_11_mataKuliah" value="<?= session()->get('data_jadwal_mk_10_11'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="10_11_dosen" value="<?= session()->get('data_jadwal_cd_10_11'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 11:30-12:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="11_12_mataKuliah" value="<?= session()->get('data_jadwal_mk_11_12'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="11_12_dosen" value="<?= session()->get('data_jadwal_cd_11_12'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 12:30-13:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="12_13_mataKuliah" value="<?= session()->get('data_jadwal_mk_12_13'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="12_13_dosen" value="<?= session()->get('data_jadwal_cd_12_13'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 13:30-14:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="13_14_mataKuliah" value="<?= session()->get('data_jadwal_mk_13_14'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="13_14_dosen" value="<?= session()->get('data_jadwal_cd_13_14'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 14:30-15:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="14_15_mataKuliah" value="<?= session()->get('data_jadwal_mk_14_15'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="14_15_dosen" value="<?= session()->get('data_jadwal_cd_14_15'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 16:30-17:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="16_17_mataKuliah" value="<?= session()->get('data_jadwal_mk_16_17'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="16_17_dosen" value="<?= session()->get('data_jadwal_cd_16_17'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 17:30-18:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="17_18_mataKuliah" value="<?= session()->get('data_jadwal_mk_17_18'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="17_18_dosen" value="<?= session()->get('data_jadwal_cd_17_18'); ?>">
						</div>
						<div class="container-form-field">
							<span>Jam 18:30-19:30 Pm</span>
							<span>Nama Mata Kuliah :</span>
							<input type="type" name="18_19_mataKuliah" value="<?= session()->get('data_jadwal_mk_18_19'); ?>">
							<span>Kode Dosen :</span>
							<input type="type" name="18_19_dosen" value="<?= session()->get('data_jadwal_cd_18_19'); ?>">
						</div>
						<!-- End first day -->
						<div class="btn-submit">
							<input type="submit">
						</div>
					</form>
				</div>
			</div>



		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../assets/js/admin-script.js"></script>
</body>

</html>