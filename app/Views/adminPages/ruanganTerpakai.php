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
			<li class="active">
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
		<main class="padding-top-main">
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ruang Terpakai</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No. Ruang</th>
								<th>Durasi</th>
								<th>Mata Kuliah</th>
								<th>Status</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php

							foreach ($ruangan as $data_ruangan) :
								if ($data_ruangan['ruangan_foto'] != null && $data_ruangan['ruangan_no_ruangan'] != null) {

							?>
									<tr>
										<td>
											<img src="img/<?= $data_ruangan['ruangan_foto']; ?>">
											<p style="margin-top: 18px;"><?= $data_ruangan['ruangan_no_ruangan']; ?></p>
										</td>
										<?php if (date('H:i') >= "06:30" && date('H:i') <= "07:30") { ?>
											<td>06:30 - 07:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "07:30" && date('H:i') <= "08:30") { ?>
											<td>07:30 - 08:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "08:30" && date('H:i') <= "09:30") { ?>
											<td>08:30 - 09:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "09:30" && date('H:i') <= "10:30") { ?>
											<td>09:30 - 10:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "10:30" && date('H:i') <= "11:30") { ?>
											<td>10:30 - 11:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "11:30" && date('H:i') <= "12:30") { ?>
											<td>11:30 - 12:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "12:30" && date('H:i') <= "13:30") { ?>
											<td>12:30 - 13:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "13:30" && date('H:i') <= "14:30") { ?>
											<td>13:30 - 14:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "14:30" && date('H:i') <= "15:30") { ?>
											<td>14:30 - 15:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "16:30" && date('H:i') <= "17:30") { ?>
											<td>16:30 - 17:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "17:30" && date('H:i') <= "18:30") { ?>
											<td>17:30 - 18:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php } elseif (date('H:i') >= "18:30" && date('H:i') <= "19:30") { ?>
											<td>18:30 - 19:30 Am</td>
											<td><?= $data_ruangan['jadwal_kelas']; ?></td>
											<td><span class="status completed">Ongoing</span></td>
										<?php }
										?>
										<form action="<?= base_url("lihatRuangan"); ?>" method="post">
											<input type="hidden" name="ruangan_id" value="<?= $data_ruangan['ruangan_id']; ?>">
											<td><input type="submit" value="Lihat" style="border: none; background: none; padding: 0; text-decoration: underline; cursor: pointer; text-decoration: none;"></td>
										</form>
									<?php } else { ?>
										<td>Tidak Ada Kelas</td>
										<td>Tidak Ada Kelas</td>
										<td>Tidak Ada Kelas</td>
										<td>Tidak Ada Kelas</td>
										<?php break; ?>
									<?php } ?>
									</tr>
								<?php endforeach ?>
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