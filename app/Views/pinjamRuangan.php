<?php
$user_id = session()->get('user_id');
$user_fname = session()->get('user_fname');
$user_lname = session()->get('user_lname');
$user_nim = session()->get('user_nim');
$user_email = session()->get('user_email');
$user_password = session()->get('user_password');
$user_status = session()->get('user_status');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- framework CSS Files -->
  <link href="assets/framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/framework/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/framework/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/framework/aos/aos.css" rel="stylesheet">
  <link href="assets/framework/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/framework/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= navbar ======= -->
  <header id="header" class="header d-flex align-items-center" style="background-color: #861c1e;">
    <div id="navapp" class="fixed-top height-em-4">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between fixed-top py-3">

        <a href="<?= base_url("/"); ?>" class="logo d-flex align-items-center">
          <h1 id="navTitle">Monitoring Kelas<span class="dotlogo-primary" id="spanNavTitle">.</span>GKU</h1>
        </a>

        <i id="hamburger-toggle" class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <?php
            if ($user_id == null) {
            } else {
            ?>
              <li><a href="<?= base_url("/"); ?>" id="navMenu-1">Home</a></li>
              <li><a href="<?= base_url("daftarRuangan"); ?>" id="navMenu-3" class="active">Daftar Ruangan</a></li>
              <li><a href="<?= base_url("notifikasi"); ?>" id="navMenu-4">Notifikasi</a></li>
              <li><a href="<?= base_url("profile"); ?>" id="navMenu-5">profile</a></li>
            <?php
            }
            ?>
            <!-- <li><a href="about.html" id="navMenu-2">About</a></li>
            <li><a href="blog.html" id="navMenu-5">Blog</a></li>
            <li class="dropdown"><a href="#" id="navMenu-6"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="contact.html" id="navMenu-7">Contact</a></li> -->
            <?php
            if ($user_id == null) {
            ?>
              <li><a href="<?= base_url("login"); ?>" id="navMenu-0">
                  <div id="navLogin" class="nav-login-menu">Login</div>
                </a>
              </li>
            <?php
            } else {
            ?>
              <li><a href="<?= base_url("logout"); ?>" id="navMenu-0">
                  <div id="navLogin" class="nav-login-menu">LogOut</div>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </nav>
        <!-- .navbar -->

      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Pinjam-ruangan Section ======= -->
  <section id="daftar-ruangan" class="daftar-ruangan">
    <div class="container" data-aos="fade-up">
      <form action="<?= base_url("simpanPinjamRuangan"); ?>" method="POST">
        <input type="hidden" name="ruangan_id" value="<?= $ruangan_id; ?>">
        <input type="hidden" name="user_id" value="<?= $user_id; ?>">
        <input type="hidden" name="nim" value="<?= $user_nim; ?>">
        <input type="hidden" name="email" value="<?= $user_email; ?>">
        <div class="section-header">
          <h2>Pinjam Ruangan</h2>
        </div>

        <div class="row justify-content-around gy-4">
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>Tanggal</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>:</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-10 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="mt-1">
                <div class="daftar-ruangan-isotope" data-portfolio-filter=".filter-ku-1" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                  <ul class="daftar-ruangan-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter=".filter-ku-1" class="filter-active"><?= date('Y-m-d', strtotime('+1 day')); ?></li>
                    <li data-filter=".filter-ku-2"><?= date('Y-m-d', strtotime('+2 day')); ?></li>
                    <li data-filter=".filter-ku-3"><?= date('Y-m-d', strtotime('+3 day')); ?></li>
                    <li data-filter=".filter-ku-4"><?= date('Y-m-d', strtotime('+4 day')); ?></li>
                    <li data-filter=".filter-ku-5"><?= date('Y-m-d', strtotime('+5 day')); ?></li>
                    <li data-filter=".filter-ku-6"><?= date('Y-m-d', strtotime('+6 day')); ?></li>
                    <li data-filter=".filter-ku-7"><?= date('Y-m-d', strtotime('+7 day')); ?></li>
                  </ul><!-- End Projects Filters -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>Jam</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>:</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-10 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-10 mt-1">
                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-1">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+1 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter1_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Item -->
                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-2">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+2 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter2_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Container -->
                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-3">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+3 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter3_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Container -->
                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-4">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+4 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter4_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Container -->
                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-5">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+5 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter5_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Container -->
                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-6">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+6 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter6_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Container -->
                  <div class="col-lg-3 col-md-3 portfolio-item filter-ku-7">
                    <?php foreach ($jadwal_ruangan as $jadwal) { ?>
                      <?php if ($jadwal['data_tanggal'] == date('Y-m-d', strtotime('+7 day'))) { ?>
                        <?php if ($jadwal['data_mk_6_7'] == null && $jadwal['data_cd_6_7'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_6_7" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">06:30 - 07:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_7_8'] == null && $jadwal['data_cd_7_8'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_7_8" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">07:30 - 08:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_8_9'] == null && $jadwal['data_cd_8_9'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_8_9" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">08:30 - 09:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_9_10'] == null && $jadwal['data_cd_9_10'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_9_10" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">09:30 - 10:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_10_11'] == null && $jadwal['data_cd_10_11'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_10_11" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">10:30 - 11:30 Am</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_11_12'] == null && $jadwal['data_cd_11_12'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_11_12" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">11:30 - 12:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_12_13'] == null && $jadwal['data_cd_12_13'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_12_13" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">12:30 - 13:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_13_14'] == null && $jadwal['data_cd_13_14'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_13_14" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">13:30 - 14:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_14_15'] == null && $jadwal['data_cd_14_15'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_14_15" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">14:30 - 15:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_16_17'] == null && $jadwal['data_cd_16_17'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_16_17" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">16:30 - 17:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_17_18'] == null && $jadwal['data_cd_17_18'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_17_18" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">17:30 - 18:30 Pm</label>
                          </div>
                        <?php } ?>
                        <?php if ($jadwal['data_mk_18_19'] == null && $jadwal['data_cd_18_19'] == null) { ?>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input checkbox-field" name="filter7_18_19" id="timeSlot1">
                            <label class="form-check-label" for="timeSlot1">18:30 - 19:30 Pm</label>
                          </div>
                        <?php }
                        if ($jadwal['data_mk_6_7'] != null && $jadwal['data_cd_6_7'] != null && $jadwal['data_mk_7_8'] != null && $jadwal['data_cd_7_8'] != null &&  $jadwal['data_mk_8_9'] != null && $jadwal['data_cd_8_9'] != null && $jadwal['data_mk_9_10'] != null && $jadwal['data_cd_9_10'] != null && $jadwal['data_mk_10_11'] != null && $jadwal['data_cd_10_11'] != null && $jadwal['data_mk_11_12'] != null && $jadwal['data_cd_11_12'] != null && $jadwal['data_mk_12_13'] != null && $jadwal['data_cd_12_13'] != null && $jadwal['data_mk_13_14'] != null && $jadwal['data_cd_13_14'] != null && $jadwal['data_mk_14_15'] != null && $jadwal['data_cd_14_15'] != null && $jadwal['data_mk_16_17'] != null && $jadwal['data_cd_16_17'] != null && $jadwal['data_mk_17_18'] != null && $jadwal['data_cd_17_18'] != null && $jadwal['data_mk_18_19'] != null && $jadwal['data_cd_18_19'] != null) { ?>
                          <div class="form-check">
                            <h5>Ruangan Penuh</h5>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <!-- End Projects Container -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>Email</h6>
              </div>
            </div>
          </div><!-- End Icon Box -->
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative " data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>:</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-10 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-10 mt-7">
                <input type="text" class="form-control field-pinjam-ruangan" placeholder="<?= $user_email; ?>" disabled>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>Nim</h6>
              </div>
            </div>
          </div><!-- End Icon Box -->
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>:</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-10 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-10 mt-7">
                <input type="text" class="form-control field-pinjam-ruangan" placeholder="<?= $user_nim; ?>" disabled>
              </div>
            </div>
          </div>
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>Kegunaan</h6>
              </div>
            </div>
          </div><!-- End Icon Box -->
          <div class="col-lg-1 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
                <h6>:</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-10 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-10 mt-7">
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control field-pinjam-ruangan"></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-2 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div>
              </div>
            </div>
          </div><!-- End Icon Box -->
          <div class="col-lg-10 d-flex flex-column">
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-10 mt-7 d-flex justify-content-end">
                <input type="submit" class="btn-submit">
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </section>
  <!-- End Pinjam-ruangan Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <!-- <script>
      window.location.href = "https://telkomuniversity.ac.id/";
  </script> -->
    <div class="footer-content position-relative">
      <div class="container d-flex justify-content-center align-items-center">
        <div class="row" style="width: 80%;">

          <div class="col-lg-4 col-md-3 footer-links">
            <h6>Link Terkait</h6>
            <ul>
              <li><a href="#">Karir Tel-U</a></li>
              <li><a href="#">Alumni & Endowment</a></li>
              <li><a href="#">Kantor Bagian Internasional</a></li>
              <li><a href="#">Perpustakaan</a></li>
            </ul>
          </div>
          <!-- End footer links column-->

          <div class="col-lg-4 col-md-3 footer-links">
            <h6></h6>
            <ul>
              <br>
              <li><a href="#">Pusat Bahasa</a></li>
              <li><a href="#">Penelitian dan Pengabdian Masyarakat</a></li>
              <li><a href="#">International Class Academic Office</a></li>
              <li><a href="#">Kampus Hijau</a></li>
            </ul>
          </div>
          <!-- End footer links column-->

          <div class="col-lg-4 col-md-3">
            <div class="footer-info">
              <h6>Kontak</h6>
              <img src="assets/img/Tel-U-logo_11.SEKUNDER-Hiitam-Utama-150x66.png" alt="">
              <p>
                Gedung Bangkit Telkom University Jl.<br>
                Telekomunikasi Terusan Buah Batu<br>
                Indonesia 40257, Bandung, Indonesia<br><br>
                <strong>Phone:</strong> (022) 7566456<br>
                <strong>Email:</strong> info@telkomuniversity.ac.id<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <!-- End footer links column-->

        </div>
      </div>
      <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Telkom University | </span></strong>Universitas Swasta Terbaik
          </div>
        </div>
      </div>
    </div>


  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script>
    var textarea = document.getElementById('keterangan');

    function checkTextarea() {
      var text = textarea.value.trim();
      if (text === '') {
        alert('Silakan isi textarea sebelum melanjutkan!');
        return false;
      }

      return true;
    }
    document.querySelector('form').addEventListener('submit', function(event) {
      if (!checkTextarea()) {
        event.preventDefault();
      }
    });
  </script>

  <!-- framework JS Files -->
  <script src="assets/framework/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/framework/aos/aos.js"></script>
  <script src="assets/framework/glightbox/js/glightbox.min.js"></script>
  <script src="assets/framework/swiper/swiper-bundle.min.js"></script>
  <script src="assets/framework/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/framework/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/app-script.js"></script>

</body>

</html>