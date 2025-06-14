<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <div class="container py-4 d-flex justify-content-center align-items-center vh-100">
    <div class="row g-0 col-lg-12 align-items-center">
      <div class="col-lg-8 mb-5 mb-lg-0 mx-auto position-relative">

        <div class="card cascading-right container-login">
          <div class="card-body p-5 shadow-5 text-center">
            <a href="<?= base_url("/"); ?>" class="position-absolute top-0 end-0 p-3 close-login"><i class="bi bi-x-lg"></i></a>
            <h2 class="fw-bold mb-5 underlined-heading">Login</h2>
            <form action="" method="POST">
              <?php if (session()->getFlashdata('error')) { ?>
                <div class="d-flex align-items-center justify-content-center text-danger">
                  <?php echo session()->getFlashdata(('error')) ?>
                </div>
                <br>
              <?php } ?>
              <div class="form-outline mb-4">
                <label class="form-label">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>

              <a href="<?= base_url("register"); ?>" class="btn btn-primary btn-block mb-4 btn-login-register">
                Sign-up
              </a>
              <!-- <button type="submit" class="btn btn-primary btn-block mb-4 btn-login-register" onclick="return checkFormPassword();">
                Log-In
              </button> -->
              <input type="submit" class="btn btn-primary btn-block mb-4 btn-login-register" onclick="return checkFormPassword();" name="login" value="Log-In">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function checkFormPassword() {
      var nim = document.getElementById("nim").value;
      var password = document.getElementById("password").value;

      if (nim !== "" && password !== "") {
        return true;
      } else {
        alert("Pastikan Nim Dan Password Sudah Terisi.")
        return false;
      }
    }
  </script>

  <!-- framework JS Files -->
  <script src="assets/framework/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/framework/aos/aos.js"></script>
  <script src="assets/framework/glightbox/js/glightbox.min.js"></script>
  <script src="assets/framework/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/framework/swiper/swiper-bundle.min.js"></script>
  <script src="assets/framework/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/framework/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/app-script.js"></script>

</body>

</html>