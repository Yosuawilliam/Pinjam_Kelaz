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
    <style>
        .stretched-link {
            border: none;
            background: none;
            padding: 0;
            text-decoration: underline;
            cursor: pointer;
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
        }

        .stretched-link:hover {
            color: #861c1e;
        }
    </style>
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
            <li>
                <a href="ruanganTerpinjam.html" class="textdecoration-none">
                    <i class='bx bi bi-building-check'></i>
                    <span class="text">Ruangan Terpinjam</span>
                </a>
            </li>
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
            <div class="container-detail-ruangan">
                <div class="body-container-detail-ruangan">
                    <div class="head">
                        <h3>Detail Ruangan</h3>
                        <a href="<?= base_url("semuaRuangan"); ?>">
                            <i class='bx bi-x-lg'></i>
                        </a>
                    </div>
                    <div class="row justify-content-around gy-4 content-detail">
                        <div class="col-lg-6 img-bg">
                            <img src="img/<?= $ruangan_foto; ?>" alt="">
                        </div>

                        <div class="col-lg-5 d-flex flex-column title">
                            <h3><?= $ruangan_no_ruangan; ?></h3>
                            <p><?= $ruangan_lokasi_kelas; ?></p>
                            <div class="icon-box d-flex position-relative">
                                <i class="bi bi-easel flex-shrink-0"></i>
                                <div>
                                    <h4>Ongoing</h4>
                                    <ul>
                                        <?php
                                        // dd($jadwal_ruangan);
                                        if ($jadwal_ruangan !== null) :
                                            foreach ($jadwal_ruangan as $jadwal) :
                                                if ($jadwal['data_tanggal'] == date('Y-m-d')) :
                                        ?>
                                                    <?php date_default_timezone_set('Asia/Jakarta');
                                                    if (date('H:i') >= "06:30" && date('H:i') <= "07:30") {
                                                    ?>
                                                        <li>06:30 - 07:30 Am</li>
                                                        <li><?= $jadwal['data_mk_6_7']; ?></li>
                                                        <li><?= $jadwal['data_cd_6_7']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "07:30" && date('H:i') <= "08:30") {
                                                    ?>
                                                        <li>07:30 - 08:30 Am</li>
                                                        <li><?= $jadwal['data_mk_7_8']; ?></li>
                                                        <li><?= $jadwal['data_cd_7_8']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "08:30" && date('H:i') <= "09:30") {
                                                    ?>
                                                        <li>08:30 - 09:30 Am</li>
                                                        <li><?= $jadwal['data_mk_8_9']; ?></li>
                                                        <li><?= $jadwal['data_cd_8_9']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "09:30" && date('H:i') <= "10:30") {
                                                    ?>
                                                        <li>09:30 - 10:30 Am</li>
                                                        <li><?= $jadwal['data_mk_9_10']; ?></li>
                                                        <li><?= $jadwal['data_cd_9_10']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "10:30" && date('H:i') <= "11:30") {
                                                    ?>
                                                        <li>10:30 - 11:30 Am</li>
                                                        <li><?= $jadwal['data_mk_10_11']; ?></li>
                                                        <li><?= $jadwal['data_cd_10_11']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "11:30" && date('H:i') <= "12:30") {
                                                    ?>
                                                        <li>11:30 - 12:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_11_12']; ?></li>
                                                        <li><?= $jadwal['data_cd_11_12']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "12:30" && date('H:i') <= "13:30") {
                                                    ?>
                                                        <li>12:30 - 13:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_12_13']; ?></li>
                                                        <li><?= $jadwal['data_cd_12_13']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "13:30" && date('H:i') <= "14:30") {
                                                    ?>
                                                        <li>13:30 - 14:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_13_14']; ?></li>
                                                        <li><?= $jadwal['data_cd_13_14']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "14:30" && date('H:i') <= "15:30") {
                                                    ?>
                                                        <li>14:30 - 15:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_14_15']; ?></li>
                                                        <li><?= $jadwal['data_cd_14_15']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "16:30" && date('H:i') <= "17:30") {
                                                    ?>
                                                        <li>16:30 - 17:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_16_17']; ?></li>
                                                        <li><?= $jadwal['data_cd_16_17']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "17:30" && date('H:i') <= "18:30") {
                                                    ?>
                                                        <li>17:30 - 18:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_17_18']; ?></li>
                                                        <li><?= $jadwal['data_cd_17_18']; ?></li>
                                                    <?php
                                                    } elseif (date('H:i') >= "18:30" && date('H:i') <= "19:30") {
                                                    ?>
                                                        <li>18:30 - 19:30 Pm</li>
                                                        <li><?= $jadwal['data_mk_18_19']; ?></li>
                                                        <li><?= $jadwal['data_cd_18_19']; ?></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li>Tidak Ada Jadwal</li>
                                                    <?php } ?>
                                    </ul>
                                <?php endif ?>
                            <?php endforeach ?>
                        <?php endif ?>

                                </div>
                            </div>
                            <div class="icon-box d-flex position-relative">
                                <!-- <a class="btn-addroom textdecoration-none" href="editRuangan.html">Edit Ruangan</a> -->
                                <form action="<?= base_url("editRuangan"); ?>" method="POST">
                                    <input type="hidden" name="ruangan_id" value="<?= $ruangan_id; ?>">
                                    <input type="submit" class="btn-addroom textdecoration-none" value="Edit Ruangan">
                                </form>
                            </div>
                            <div class="icon-box d-flex position-relative">
                                <form action="<?= base_url("tambahJadwalRuangan"); ?>" method="POST">
                                    <input type="hidden" name="ruangan_id" value="<?= $ruangan_id; ?>">
                                    <input type="submit" class="btn-addroom textdecoration-none" value="Tambah Jadwal">
                                </form>
                            </div>
                        </div>
                        <div class="row justify-content-around gy-4">
                            <?php
                            foreach ($jadwal_ruangan as $jadwal) :
                            ?>
                                <?php if (!$jadwal['data_tanggal'] == null) : ?>
                                    <div class="col-lg-4 d-flex flex-column">
                                        <div class="icon-box d-flex position-relative">
                                            <i class="bi bi-clock"></i>
                                            <div>
                                                <?php
                                                if ($jadwal['data_tanggal'] == date('Y-m-d')) {
                                                ?>
                                                    <form action="<?= base_url('editJadwalRuangan'); ?>" method="post">
                                                        <input type="hidden" name="jadwal_id" value="<?= $jadwal['data_id']; ?>">
                                                        <input type="submit" class="stretched-link" value="Jadwal Hari ini :">
                                                    </form>
                                                <?php } else { ?>
                                                    <form action="<?= base_url('editJadwalRuangan'); ?>" method="post">
                                                        <input type="hidden" name="jadwal_id" value="<?= $jadwal['data_id']; ?>">
                                                        <input type="submit" class="stretched-link" value="<?= $jadwal['data_tanggal']; ?>">
                                                    </form>
                                                <?php } ?>
                                                <ul>
                                                    <li>06:30-07:30 Am
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "06:30" && date('H:i') <= "07:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_6_7'] == null) {
                                                            echo ($jadwal['data_mk_6_7']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>07:30-08:30 Am
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "07:30" && date('H:i') <= "08:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_7_8'] == null) {
                                                            echo ($jadwal['data_mk_7_8']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>08:30-09:30 Am
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "08:30" && date('H:i') <= "09:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_8_9'] == null) {
                                                            echo ($jadwal['data_mk_8_9']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>09:30-10:30 Am
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "09:30" && date('H:i') <= "10:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_9_10'] == null) {
                                                            echo ($jadwal['data_mk_9_10']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>10:30-11:30 Am
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "10:30" && date('H:i') <= "11:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_10_11'] == null) {
                                                            echo ($jadwal['data_mk_10_11']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>11:30-12:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "11:30" && date('H:i') <= "12:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_11_12'] == null) {
                                                            echo ($jadwal['data_mk_11_12']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>12:30-13:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "12:30" && date('H:i') <= "13:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_12_13'] == null) {
                                                            echo ($jadwal['data_mk_12_13']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>13:30-14:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "13:30" && date('H:i') <= "14:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_13_14'] == null) {
                                                            echo ($jadwal['data_mk_13_14']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>14:30-15:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "14:30" && date('H:i') <= "15:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_14_15'] == null) {
                                                            echo ($jadwal['data_mk_14_15']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>16:30-17:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "16:30" && date('H:i') <= "17:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_16_17'] == null) {
                                                            echo ($jadwal['data_mk_16_17']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>17:30-18:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "17:30" && date('H:i') <= "18:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_17_18'] == null) {
                                                            echo ($jadwal['data_mk_17_18']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                    <li>18:30-19:30 Pm
                                                        <?php date_default_timezone_set('Asia/Jakarta');
                                                        if ($jadwal['data_tanggal'] == date('Y-m-d') && date('H:i') >= "18:30" && date('H:i') <= "19:30") {
                                                            echo ("| Ongoing");
                                                        } ?>
                                                    </li>
                                                    <p><?php if (!$jadwal['data_mk_18_19'] == null) {
                                                            echo ($jadwal['data_mk_18_19']);
                                                        } else {
                                                            echo ("Tidak Ada Jadwal");
                                                        } ?>
                                                    </p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Icon Box -->
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <!-- End Icon Box -->
                        </div>
                    </div>

                </div>
            </div>



        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="../assets/js/admin-script.js"></script>
</body>

</html>