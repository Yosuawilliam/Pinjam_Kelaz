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

  <main id="main">

    <!-- ======= View Detail Section ======= -->
    <section id="view-detail" class="view-detail">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Detail Ruangan</h2>
        </div>

        <div class="row justify-content-around gy-4">
          <!-- <div>
                <a href="#"><span><i class="bi bi-arrow-left"></i> </span>Kembali</a>
              </div> -->
          <div class="col-lg-6 img-bg" style="background-image: url(img/<?= $ruangan_foto; ?>);" data-aos="zoom-in" data-aos-delay="100"></div>

          <!-- <div class="col-lg-5 d-flex flex-column justify-content-center"> -->
          <div class="col-lg-5 d-flex flex-column">
            <h3><?= $ruangan_no_ruangan; ?></h3>
            <p><?= $ruangan_lokasi_kelas; ?></p>
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
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
                          <li>Tidak Ada Jadwal</li>
                          <li>Tidak Ada Jadwal</li>
                        <?php } ?>
                </ul>
              <?php endif ?>
            <?php endforeach ?>
          <?php endif ?>
              </div>
            </div>
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <!-- <a class="btn-addroom" href="pinjamRuangan.html">Pinjam Ruangan</a> -->
              <form action="<?= base_url("pinjamRuangan"); ?>" method="POST">
                <input type="hidden" name="ruangan_id" value="<?= $ruangan_id; ?>">
                <input type="submit" class="btn-addroom textdecoration-none" value="Pinjam Ruangan">
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
                        <h4>Jadwal Hari ini :</h4>
                      <?php } else { ?>
                        <h4><?= $jadwal['data_tanggal']; ?></h4>
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
          </div>
        </div><!-- End Icon Box -->
      </div>
      </div>

      </div>
    </section><!-- End View Detail Section -->
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container d-flex justify-content-center align-items-center">
        <div class="row" style="width: 80%;">

          <div class="col-lg-4 col-md-3 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><a href="#">Karir Tel-U</a></li>
              <li><a href="#">Alumni & Endowment</a></li>
              <li><a href="#">Kantor Bagian Internasional</a></li>
              <li><a href="#">Perpustakaan</a></li>
            </ul>
          </div>
          <!-- End footer links column-->

          <div class="col-lg-4 col-md-3 footer-links">
            <h4></h4>
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
              <h4>Kontak</h4>
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