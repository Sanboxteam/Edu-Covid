<?php
    // include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - EduCovid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fitur.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section style="height:100%; width: 100%; box-sizing: border-box; background-color:rgba(219, 223, 255, 0.705)">

        <div class="header-2-2" style="font-family: 'Poppins', sans-serif;">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Logo -->
                <a href="#">
                    <img style="margin-right:0.75rem" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-2-2">
          <span class="navbar-toggler-icon"></span>
        </button>

                <div class="modal-header-2-2 modal fade" id="targetModal-header-2-2" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-2-2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-header-2-2">
                            <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                                <!-- Phone Display -->
                                <ul class="navbar-nav responsive-header-2-2 me-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pencegahan.php">Covid-19 Prevention</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts.php">Data & Statistic</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kuis.php">Quiz</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kontak.php">Contact</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-2-2">
                    <h4 class="app-name">Edu-Covid</h4>
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item home">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pencegahan.php">Prevention</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="charts.php">Statistic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kuis.php">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </section>

    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f5f5f5">
    <div class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row" style="font-family: 'Poppins', sans-serif">
    <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "", "project_dpw");
                                
      // Check connection
      if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }
    ?>
      <div class="position-relative d-none d-lg-block h-100 width-left">
        <img class="position-absolute img-fluid centered" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png" alt="" />
      </div>
      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
        <div class="right mx-lg-0 mx-auto">
          <div class="align-items-center justify-content-center d-lg-none d-flex">
            <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png" alt="" />
          </div>
          <div class="">
          <div class="row text-center">
                  <div class="col-md-6">
                            <div class="kolom">
                              <a href="login.php" style="text-decoration: none;"><span class="green-bottom-caption">Login</span></a>
                            </div>
                  </div>
                  <div class="col-md-6">
                            <div class="kolom">
                              <a style="text-decoration: none;"><span class="text-muted">Registrasi</span></a>         
                            </div>
                  </div>
                  <hr class="hr-footer-2-2">
          </div>
          <h3 class="title-text">Registrasi Untuk Mempunyai Akun</h3>
          <p class="caption-text">
            Silahkan lengkapi form di bawah ini sebagai ketentuan untuk membuat akun.
          </p>
          <form style="margin-top: 1.5rem" action="" method="post">
            
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Name</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: -1rem" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                <input class="input-field border-0" type="text" name="" id="" placeholder="Your Full Name" autocomplete="on" required />
              </div>
            </div>
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">NIK (Resident Identity Number)</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: -1rem" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                <input class="input-field border-0" type="number" name="" id="" placeholder="Your NIK" autocomplete="on" required />
              </div>
            </div>
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Gender</label>
                <div class="row text-center">
                  <div class="col-md-6">
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-Laki"  autocomplete="on" required>
                      <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="perempuan"  autocomplete="on" required>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                  </div>
                </div>
            </div>
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Registrant Type</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: -1rem" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                <select class="input-field border-0" name="combo1" id="combo1" autocomplete="on" required >
                  <option value="" selected disabled hidden>Your Registrant Type</option>
                  <?php                                      
                    $tipe = "SELECT nama FROM tipe_akun where nama != 'admin' and nama is not null";
                    $result = mysqli_query($link, $tipe) or die (mysqli_connect_error()."[".$tipe."]");
                  ?>
                  <?php 
                    while ($row = mysqli_fetch_row($result))
                    {
                    echo "<option>".$row['0']."</option>";
                    }
                  ?>    
                </select>
              </div>
            </div>
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Date Of Birth</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: -1rem" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                <input placeholder="You Date Of Birth" class="input-field border-0" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" autocomplete="on" required/>
              </div>
            </div>
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Email Address</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: -1rem" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                <input class="input-field border-0" type="email" name="" id="" placeholder="Your Email Address" autocomplete="on" required />
              </div>
            </div>
            <div style="margin-top: 1.75rem">
              <label for="" class="d-block input-label">Password</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: -1rem" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                <input class="input-field border-0" type="password" name="" placeholder="Your Password" id="password-content-3-5" minlength="6" required />
                <div onclick="togglePassword()">
                  <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd" d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z" fill="#CACBCE" />
                  </svg>
                </div>
              </div>
            </div>
            <div style="margin-top: 1.75rem">
                <div class="row text-right">
                  <div class="col-md-1">
                    <input type="checkbox" name="checkbox" value="check" autocomplete="on" required />
                  </div>
                  <div class="col-md-11">
                    <a class="caption-text" style="text-decoration: none;">
                      Data yang diberikan adalah data sebenar benarnya.
                    </a>
                  </div>
                </div>
            </div>
            <button class="btn btn-fill text-white d-block w-100" type="submit">
              Regis
            </button>
          </form>
          <p class="text-center bottom-caption">
            Sudah Punya Akun?
            <a href="login.php" style="text-decoration: none;"><span class="green-bottom-caption">Login Disini</span></a>
          </p>
        </div>
      </div>
    </div>

    <!-- Password toggle -->
    <script>
      function togglePassword() {
        var x = document.getElementById("password-content-3-5");
        if (x.type === "password") {
          x.type = "text";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
        } else {
          x.type = "password";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
        }
      }
    </script>
  </section>

    <!-- Footer -->
    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: rgb(255, 255, 255);">
        <div class="info-footer-footer-2-2">
            <div class="">
                <hr class="hr-footer-2-2">
            </div>
            <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space-footer-2-2">
                <div class="d-flex title-font font-medium align-items-center" style="cursor: pointer;">

                    <a href="https://www.facebook.com/yasin.a.yahya" class="social-media-c-footer-2-2 social-media-center-1-footer-2-2" target="_blank"> <img src="img/facebook.png" alt="facebook"> </a>

                    <a href="https://twitter.com/yasinalfiyahya" class="social-media-c-footer-2-2 social-media-center-1-footer-2-2" , target="_blank"><img src="img/twitter.png" alt="twitter"></a>

                    <a href="https://github.com/yasinAlfiYahya" class="social-media-c-footer-2-2 social-media-center-1-footer-2-2" target="_blank"><img src="img/github.png" alt="github"></a>

                    <a href="https://www.instagram.com/yasin_alfiyahya/" class="social-media-c-footer-2-2 social-media-center-1-footer-2-2" target="_blank"><img src="img/instagram.png" alt="instagram"></a>

                </div>

                <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center footer-responsive-space-footer-2-2">
                    <a class="footer-link-footer-2-2" style="text-decoration: none;">Terms of Service</a>
                    <span style="margin-right:1.25rem">|</span>
                    <a class="footer-link-footer-2-2" style="text-decoration: none;">Privacy Policy</a>
                    <span style="margin-right:1.25rem">|</span>
                    <a class="footer-link-footer-2-2" style="text-decoration: none;">Licenses</a>
                </nav>

                <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                    <p style="margin: 0">Copyright © 2021 Yasin Alfi Yahya</p>
                </nav>

            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="js/function.js"></script>
</body>

</html>