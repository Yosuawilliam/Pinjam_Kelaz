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
              <li><a href="<?= base_url("daftarRuangan"); ?>" id="navMenu-3">Daftar Ruangan</a></li>
              <li><a href="<?= base_url("notifikasi"); ?>" id="navMenu-4" class="active">Notifikasi</a></li>
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

  <!-- ======= Daftar-ruangan Section ======= -->
  <section id="daftar-ruangan" class="daftar-ruangan">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Notifikasi</h2>
      </div>

      <div class="daftar-ruangan-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">


        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php if (!empty($dataNotifikasi)) { ?>
            <?php foreach ($dataNotifikasi as $notifikasi) : ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ku-1">
                <div class="daftar-ruangan-content h-100">
                  <img src="img/<?= $notifikasi['data_foto_kelas']; ?>" class="img-fluid" alt="">
                  <div class="daftar-ruangan-info">
                    <h4><?= $notifikasi['data_status_peminjaman']; ?></h4>
                  </div>
                </div>
                <div class="post-content d-flex flex-column">

                  <h3 class="post-title"><?= $notifikasi['data_no_kelas']; ?></h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <!-- <i class="bi bi-book"></i> <span class="ps-2">Economics</span> -->
                    </div>
                    <!-- <span class="px-3 text-black-50">/</span> -->
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <span class="ps-2"><?= $notifikasi['data_tanggal_peminjaman']; ?></span>
                    </div>
                  </div>

                  <hr>

                  <!-- <a href="detailNotifikasi.html"><span>Lihat</span><i class="bi bi-arrow-right"></i></a> -->
                  <form action="<?= base_url('detailNotifikasi'); ?>" method="POST">
                    <input type="hidden" name="ruangan_id" value="<?= $notifikasi['data_id_ruangan']; ?>">
                    <input type="hidden" name="notifikasi_id" value="<?= $notifikasi['data_id_notifikasi']; ?>">
                    <input type="submit" class="readmore stretched-link" value="Lihat" style="border: none; background: none; padding: 0; text-decoration: underline; cursor: pointer; text-decoration: none; margin-right:10px"><i class="bi bi-arrow-right"></i>
                  </form>

                </div>
              </div>
              <!-- End daftar-ruangan Item -->
            <?php endforeach; ?>
          <?php } else { ?>
            <div class="section-header">
              <h4>Tidak Ada Notifikasi</h4>
            </div>
          <?php } ?>
        </div><!-- End daftar-ruangan Container -->

      </div>

    </div>
  </section><!-- End daftar-ruangan Section -->

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