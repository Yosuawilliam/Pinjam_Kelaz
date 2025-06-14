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
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Daftar Acount</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Id</th>
								<th>NIM</th>
								<th>Email</th>
								<th>Status</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$dataSesion_AllUsers = session('dataSesion_All_Users');
							foreach ($dataSesion_AllUsers as $data_users) :
							?>
								<tr>
									<td>
										<img src="img/<?= $data_users['user_foto']; ?>">
										<p style="margin-top: 18px;">AO1<?= $data_users['user_id']; ?></p>
									</td>
									<td><?= $data_users['user_nim']; ?></td>
									<td><?= $data_users['user_email']; ?></td>
									<td><span class="status completed"><?= $data_users['user_status']; ?></span></td>
									<form action="<?= base_url("detailAccount"); ?>" method="POST">
										<input type="hidden" name="user_id" value="<?= $data_users['user_id']; ?>">
										<td><input type="submit" value="Lihat" style="border: none; background: none; padding: 0; text-decoration: underline; cursor: pointer; text-decoration: none;"></td>
									</form>
									<!-- <td><a href="" class="textdecoration-none">Lihat</a></td> -->
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../assets/js/admin-script.js"></script>
</body>

</html>