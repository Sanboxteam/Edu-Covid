<?php
    include 'koneksi.php';
    error_reporting(0);
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
    <link rel="stylesheet" href="css/kontak.css">
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
                                        <a class="nav-link" href="pendataan.php">Pendataan Penyebaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
                                <!-- <button class="btn btn-default btn-no-fill-header-2-2">Log In</button>
                                <button class="btn btn-fill-header-2-2">Try Now</button> -->
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
                            <a class="nav-link" href="pendataan.php">Pendataan Penyebaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-default btn-no-fill-header-2-2">Log In</button>
                    <button class="btn btn-fill-header-2-2">Try Now</button> -->
                </div>
            </nav>

            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero-header-2-2">
                    <!-- Left Column -->
                    <div class="left-column-header-2-2 d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <!-- <p class="text-caption-header-2-2">FREE 30 DAY TRIAL</p> -->
                        <h1 class="title-text-big-header-2-2 d-lg-inline d-none">Pendataan Penyebaran <br> Covid-19 di Indonesia</h1>
                        <h1 class="title-text-small-header-2-2 d-lg-none d-inline">Pendataan Penyebaran Covid-19 di Indonesia</h1>
                        <div class="div-button-header-2-2 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center">
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="right-column-header-2-2 text-center d-flex justify-content-center pe-0">
                        <img id="img-fluid" style="display: block;max-width: 100%;height: auto;" src="img/Corona 2.png" alt="">
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Content -->

    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">
        <div class="d-flex flex-column align-items-center h-100 flex-lg-row" style="font-family: 'Poppins', sans-serif;">
            <div class="position-relative d-none d-lg-block h-100 width-left-content-3-5">
                <img class="position-absolute img-fluid centered-content-3-5" src="img/pelayanan.jpg" alt="">
            </div>
            <div class="d-flex mx-auto align-items-left justify-content-left width-right-content-3-5">
                <div class="right-content-3-5">
                    <div class="align-items-center justify-content-center d-lg-none d-flex">
                        <img class="img-fluid" src="img/pelayanan.jpg" alt="">
                    </div>
                    <h3 class="title-text-content-3-5">Bantu Kami Mendata Penyebaran Covid-19!</h3>
                    <p class="caption-text-content-3-5">Hai Covid Rangers. Salam Sehat! Yuk bantu kami dalam melakukan pendataan penyebaran Covid-19 yang ada di Indonesia. Dengan hal ini kamu bisa ikut andil membantu pemerintah dalam memberikan edukasi kepada masyarakat terkait sebaran zona Covid-19 di Indonesia.</p>
                  
                    <form style="margin-top: 2.5rem;" action="" method="post">
                        <div style="margin-bottom: 1.75rem;">
                            <label for="" class="d-block input-label-content-3-5">Provinsi Penyebaran Covid-19: </label>
                            <div class="d-flex w-100 div-input-content-3-5">
                                <select class="input-field-content-3-5" name="provinsi" autocomplete="on" required> 
                                <?php
                                    $provinsi = "SELECT name FROM provinces";
                                    $result = mysqli_query($link, $provinsi) or die (mysqli_connect_error()."[".$provinsi."]");
                                ?>

                                <?php 
                                    // echo "<option>". ' Pilih Provinsi ' ."</option>";
                                echo  "<option disabled selected>" . 'Pilih Provinsi' . "</option>";
                                        while ($row = mysqli_fetch_row($result)){
                                            echo "<option>".$row['0']."</option>";
                                        }
                                ?>  
                                </select>
                            </div>
                        </div>  
                        <?php $getProvinsi = $_POST['provinsi']; ?>

                        <div style="margin-bottom: 1.75rem;">
                            <label for="" class="d-block input-label-content-3-5">Tanggal Penyebaran Covid-19: </label>
                            <div class="d-flex w-100 div-input-content-3-5">
                                <input class="input-field-content-3-5" type="date" name="tanggal" id="email" placeholder="Masukkan Tanggal Penyebaran Covid-19" autocomplete="on" required>
                            </div>
                        </div>

                        <div style="margin-bottom: 1.75rem;">
                            <label for="" class="d-block input-label-content-3-5">Jumlah Kasus Positif</label>
                            <div class="d-flex w-100 div-input-content-3-5">
                                <input class="input-field-content-3-5" type="" name="positif" id="" placeholder="Masukkan Jumlah Kasus Positif" autocomplete="on" required>
                            </div>
                        </div>

                        <div style="margin-bottom: 1.75rem;">
                            <label for="" class="d-block input-label-content-3-5">Jumlah Kasus Sembuh</label>
                            <div class="d-flex w-100 div-input-content-3-5">
                                <input class="input-field-content-3-5" type="" name="sembuh" id="" placeholder="Masukkan Jumlah Kasus Sembuh" autocomplete="on" required>
                            </div>
                        </div>

                        <div style="margin-bottom: 1.75rem;">
                            <label for="" class="d-block input-label-content-3-5">Jumlah Kasus Meninggal</label>
                            <div class="d-flex w-100 div-input-content-3-5">
                                <input class="input-field-content-3-5" type="" name="meninggal" id="" placeholder="Masukkan Jumlah Kasus Meninggal" autocomplete="on" required>
                            </div>
                        </div>
                        
                        <input class="btn btn-fill-content-3-5 d-block w-100" type="submit" ></input>
                    </form>
                </div>
            </div>


        </div>

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