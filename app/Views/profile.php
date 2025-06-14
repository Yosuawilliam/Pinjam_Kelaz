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
              <li><a href="<?= base_url("notifikasi"); ?>" id="navMenu-4">Notifikasi</a></li>
              <li><a href="<?= base_url("profile"); ?>" id="navMenu-5" class="active">profile</a></li>
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

      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Profile Section ======= -->
  <!-- <section id="daftar-ruangan" class="daftar-ruangan">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Profile</h2>
        </div>
        
        <div class="row justify-content-around gy-4">
            <div class="col-lg-1 d-flex flex-column">
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div >
                        <h6>photo</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 d-flex flex-column">
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div >
                        <h6>:</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 d-flex flex-column">
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="mt-1">
                        <h6>Nama</h6>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
  </section> -->
  <!-- End Profile Section -->

  <!-- Profile Section -->
  <section id="view-detail" class="view-detail">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Profile</h2>
      </div>

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 profile-img" style="background-image: url(img/<?= session()->get('user_profile'); ?>);" data-aos="zoom-in" data-aos-delay="100"></div>
        <!-- <div class="col-lg-6 profile-img" style="background-image: url(assets/img/kelas.jpg);" data-aos="zoom-in" data-aos-delay="100"></div> -->

        <!-- <div class="col-lg-5 d-flex flex-column justify-content-center"> -->
        <div class="col-lg-5 d-flex flex-column">
          <h5>Nama Depan</h5>
          <div class="data-field-profile">
            <h6><?= session()->get('user_fname'); ?></h6>
          </div>
          <h5>Nama Belakang</h5>
          <div class="data-field-profile">
            <h6><?= session()->get('user_lname'); ?></h6>
          </div>
          <h5>Nim</h5>
          <div class="data-field-profile">
            <h6><?= session()->get('user_nim'); ?></h6>
          </div>
          <h5>Email address</h5>
          <div class="data-field-profile">
            <h6><?= session()->get('user_email'); ?></h6>
          </div>
          <h5>Password</h5>
          <div class="data-field-profile">
            <h6>**********</h6>
          </div>
          <div class="row container-for-btn">
            <div class="col-lg-6 d-flex flex-column">
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <a class="edit-pass" href="" data-bs-toggle="modal" data-bs-target="#edit-password-modal">Ganti Password</a>
              </div>
            </div>
            <div class="col-lg-6 d-flex flex-column">
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <a class="edit-profile" href="" data-bs-toggle="modal" data-bs-target="#edit-prfile-modal">Edit Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Profile Section -->

  <!-- Modal Edit Profile -->
  <div class="modal fade" id="edit-prfile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-lg-12 d-flex flex-column">
            <form action="<?= base_url("editProfile"); ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="user_id" value="<?= $user_id; ?>">
              <h5>Nama Depan</h5>
              <div class="data-field-profile col-lg-12">
                <input type="text" class="col-lg-12" value="<?= $user_fname; ?>" name="fname">
              </div>
              <h5>Nama Belakang</h5>
              <div class="data-field-profile col-lg-12">
                <input type="text" class="col-lg-12" value="<?= $user_lname; ?>" name="lname">
              </div>
              <h5>Nim</h5>
              <div class="data-field-profile">
                <input type="text" class="col-lg-12" value="<?= $user_nim; ?>" name="nim">
              </div>
              <h5>Email address</h5>
              <div class="data-field-profile">
                <input type="text" class="col-lg-12" value="<?= $user_email; ?>" name="email">
              </div>
              <h5>Foto Profile</h5>
              <div class="data-field-profile">
                <input type="file" class="col-lg-12" accept="image/*" name="photo">
              </div>

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
  <!-- End Modal Edit Profile -->

  <!-- Modal Edit Password -->
  <div class="modal fade" id="edit-password-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-lg-12 d-flex flex-column">
            <form action="<?= base_url("editPassword"); ?>" method="POST">
              <input type="hidden" name="user_id" value="<?= $user_id; ?>">
              <h5>Password Baru</h5>
              <div class="data-field-profile col-lg-12">
                <input type="password" class="col-lg-12" name="password" id="newPassword">
              </div>
              <h5>Veryfikasi Password</h5>
              <div class="data-field-profile">
                <input type="password" class="col-lg-12" id="passwordVerify">
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
          <!-- <button type="submit" class="btn btn btn-success" onclick="return checkFormPassword();">Simpan</button> -->
          <input type="submit" class="btn btn btn-success" onclick="return checkFormPassword();" value="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal Edit Password -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

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
    function checkFormPassword() {
      var password = document.getElementById("newPassword").value;
      var passwordVerify = document.getElementById("passwordVerify").value;
      var hasNumber = /\d/.test(password);
      var hasCharacter = /[a-zA-Z]/.test(password);

      if (password !== "" && passwordVerify !== "") {
        if (passwordSesion !== oldPassword) {
          if (password.length > 8 && hasNumber && hasCharacter) {
            if (password == passwordVerify) {
              alert("Berhasil.")
              return true;
            } else {
              // $('#verifyPassword').modal('show');
              alert("Password harus sesuai dengan Password Verifikasi.")
              return false;
            }
          } else {
            // $('#myModal').modal('show');
            alert("Kata sandi harus terdiri dari minimal 8 karakter dan mengandung setidaknya satu angka dan satu karakter.")
            return false;
          }
        } else {
          // $('#missingInputModal').modal('show');
          alert("Pastikan Inputan Sudah Terisi.")
          return false;
        }
      }
    }
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