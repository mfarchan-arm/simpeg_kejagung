<?php $home = mysqli_fetch_array($data); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $home['nama'];?> | Login </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" href="logo/bm.png">

  <!-- Argon -->
  <link rel="stylesheet" href="bootstrap/assets/argon/css/argon-dashboard.css">
  <link rel="stylesheet" href="bootstrap/assets/argon/css/nucleo-icons.css">
  <link rel="stylesheet" href="bootstrap/assets/argon/css/nucleo-svg.css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>
  <body class="">
    <main class="main-content  mt-0">
        <section>
          <div class="page-header min-vh-100">
            <div class="container">
              <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                  <div class="card card-plain">
                    <div class="card-header pb-0 text-start">
                      <h4 class="font-weight-bolder">Login</h4>
                      <p class="mb-0">Masukkan Username dan Password untuk Login</p>
                    </div>
                    <div class="card-body">
                      <form role="form" method="post" action="proses?valid=sistem&method=validasi">
                        <div class="mb-3">
                          <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username" required
                          oninvalid="this.setCustomValidity('Masukan Username Terlebih Dahulu')"
                          oninput="setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                          <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required
                          oninvalid="this.setCustomValidity('Masukan Password Terlebih Dahulu')"
                          oninput="setCustomValidity('')">
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                      <p class="mb-4 text-sm mx-auto">
                        Belum punya akun?
                        <a href="daftar/" class="text-primary text-gradient font-weight-bold">Buat Akun</a>
                      </p>
                      <p class="mb-4 text-sm mx-auto">
                        Lupa Password?
                        <a href="lost/" class="text-primary text-gradient font-weight-bold">Lupa Password</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                  <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
              background-size: cover;">
                    <span class="mask bg-gradient-primary opacity-6"></span>
                    <h4 class="mt-5 text-white font-weight-bolder position-relative">"Kejaksaan Agung Kota Bengkulu"</h4>
                    <p class="text-white position-relative">Sistem Informasi Kenaikan Pangkat, Kenaikan Gaji Berkala dan Arsip Kepegawaian <?php echo $home['nama'];?><br><?php echo $home['instansi'];?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!--   Core JS Files   -->
      <script src="bootstrap/assets/argon/js/js/core/popper.min.js"></script>
      <script src="bootstrap/assets/argon/js/core/bootstrap.min.js"></script>
      <script src="bootstrap/assets/argon/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="bootstrap/assets/argon/js/js/plugins/smooth-scrollbar.min.js"></script>
      <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
              damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
      </script>
      <!-- jQuery 3 -->
      <script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="bootstrap/assets/argon/js/argon-dashboard.js"></script>
  </body>
</html>