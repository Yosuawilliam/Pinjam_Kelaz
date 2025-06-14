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

    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-8 mb-5 mb-lg-0 mx-auto position-relative">
                <!-- Tombol Close -->

                <div class="card cascading-right container-login">
                    <div class="card-body p-5 shadow-5 text-center">
                        <a href="<?= base_url("/"); ?>" class="position-absolute top-0 end-0 p-3 close-login"><i class="bi bi-x-lg"></i></a>
                        <h2 class="fw-bold mb-5 underlined-heading">Join now</h2>
                        <form action="<?= base_url("/addaccount/add"); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="form-control" name="f_name" id="f_name" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="l_name" id="l_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label">Nim</label>
                                <input type="text" class="form-control" name="nim" id="nim" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label">Email address</label>
                                <input type="text" class="form-control" name="email" id="email" />
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label">Verify Password</label>
                                        <input type="password" class="form-control" id="verifypassword" />
                                    </div>
                                </div>
                            </div>

                            <a href="<?= base_url("/login"); ?>" class="btn btn-primary btn-block mb-4 btn-login-register">
                                Log-In
                            </a>
                            <!-- <button type="submit" class="btn btn-primary btn-block mb-4 btn-login-register" onclick="return checkFormPassword();">
                                Sign-up
                            </button> -->

                            <input type="submit" class="btn btn-primary btn-block mb-4 btn-login-register" onclick="return checkFormPassword();" name="Daftar" value="Sign-Up">

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="exampleModalLabel">Persyaratan Password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-danger">
                                            Kata sandi harus terdiri dari minimal 8 karakter dan mengandung setidaknya satu angka dan satu karakter.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="verifyPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="exampleModalLabel">Persyaratan Password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-danger">
                                            Password harus sesuai dengan Password Verifikasi.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="missingInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="exampleModalLabel">Persyaratan Form</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-danger">
                                            Pastikan Inputan Sudah Terisi.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkFormPassword() {
            var f_name = document.getElementById("f_name").value;
            var l_name = document.getElementById("l_name").value;
            var nim = document.getElementById("nim").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var passwordVerify = document.getElementById("verifypassword").value;
            var hasNumber = /\d/.test(password);
            var hasCharacter = /[a-zA-Z]/.test(password);

            if (f_name !== "" && l_name !== "" && nim !== "" && email !== "" && password !== "" && passwordVerify !== "") {
                if (password.length > 8 && hasNumber && hasCharacter) {
                    if (password == passwordVerify) {
                        alert("Pendaftaran Berhasil.")
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
    </script>

    <!-- framework JS Files -->
    <script src="assets/framework/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/framework/aos/aos.js"></script>
    <script src="assets/framework/glightbox/js/glightbox.min.js"></script>
    <script src="assets/framework/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/framework/swiper/swiper-bundle.min.js"></script>
    <script src="assets/framework/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/framework/php-email-form/validate.js"></script>

    <script src="assets/framework/bootstrap/js/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/app-script.js"></script>

</body>

</html>