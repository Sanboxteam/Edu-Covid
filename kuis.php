<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuis - EduCovid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fitur.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/kuis.css">
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
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Quiz</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kontak.php">Contact</a>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="kuis.php">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Contact</a>
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
                        <h1 class="title-text-big-header-2-2 d-lg-inline d-none">Education Quiz <br> Covid-19</h1>
                        <h1 class="title-text-small-header-2-2 d-lg-none d-inline">Education Quiz <br> Covid-19</h1>
                        <p class="title-2">Seberapa jauh sih kamu paham tentang Covid-19? Yakin nih sudah paham betul bahayanya? Yuk coba asah pengetahuanmu seputar <br> Covid-19 disini!</p>
                        <div class="div-button-header-2-2 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center">
                            <button class="btn d-inline-flex mb-md-0 btn-try-header-2-2" onclick="munculSoal()"> Mulai Kuis </button>
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

    <section class="">
        <div class="" id="soal">
            <div class="Keterangan">
                <div class="center">
                    <b>
                    <table width="320" border="0">
                        <tr>
                            <td class="Biodata"><b><p> Nama </p></b></td>
                    <td class="Biodata" id="nama"><b><p>: Yasin Alfi Yahya </p></b></td>
                    </tr>
                    <tr>
                        <td class="Biodata"><b><p> Hari/Tanggal </p></b></td>
                        <td class="Biodata" id="waktu"><b><p>: 26 Maret 2021 </p></b></td>
                    </tr>
                    </table>
                    </b>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <!-- Soal -->
            <form id="form1" name="form1" method="post" action="">
                <ol start="1" type="1">
                    <li>Dimana pertama kali kasus Covid-19 ditemukan?
                    </li>
                    <br>
                    <ol start="1" type="a">
                        <i>
                            <li><input type="radio" name="NO1" value="a">Jakarta</li>
                            <li><input type="radio" name="NO1" value="b">Bogor</li>
                            <li><input type="radio" name="NO1" value="c">Paris</li>
                            <li><input type="radio" name="NO1" value="d">Kuala Lumpur</li>
                            <li><input type="radio" name="NO1" value="e">Wuhan</li>
                        </i>
                    </ol>

                    <br>

                    <li>Dibawah ini yang termasuk 5M, <b>kecuali...</b></li>
                    <br>

                    <div>
                        <ol start="1" type="a">
                            <i>
                            <li><input type="radio" name="NO2" value="a">Mencuci Tangan</li>
                            <li><input type="radio" name="NO2" value="b">Makan Sepanjang Hari</li>
                            <li><input type="radio" name="NO2" value="c">Memakai Masker</li>
                            <li><input type="radio" name="NO2" value="d">Menjaga jarak</li>
                            <li><input type="radio" name="NO2" value="e">Menghindari Keramaian</li>
                        </i>
                        </ol>
                    </div>
                    <br>
                    <li>Kapan kasus covid-19 pertama kali terjadi di Indonesia?</li>
                    <br>

                    <div>
                        <ol start="1" type="a">
                            <i>
                            <li><input type="radio" name="NO3" value="a">2 Maret 2020</li>
                            <li><input type="radio" name="NO3" value="b">2 Januari 2021</li>
                            <li><input type="radio" name="NO3" value="c">4 April 2019r</li>
                            <li><input type="radio" name="NO3" value="d">6 November 2020</li>
                            <li><input type="radio" name="NO3" value="e">1 Januari 2021</li>
                        </i>
                        </ol>
                    </div>
                    <br>

                    <div>
                        <li>Dibawah ini yang termasuk cara mencegah Covid-19 yaitu...</li>
                        <br>
                        <ol start="1" type="a">
                            <i>
                            <li><input type="radio" name="NO4" value="a">Tidur Setiap Hari</li>
                            <li><input type="radio" name="NO4" value="b">Nonton Bioskop</li>
                            <li><input type="radio" name="NO4" value="c">Pergi Ke Mall</li>
                            <li><input type="radio" name="NO4" value="d">Menghindari Kerumunan</li>
                            <li><input type="radio" name="NO4" value="e">Pergi Keluar Kota</li>
                        </i>
                        </ol>
                        <br>
                    </div>

                    <div>
                        <li>Berapa lama waktu minimal mencuci tangan yang dianjurkan oleh WHO?
                        </li>
                        <br>
                        <ol start="1" type="a">
                            <i>
                            <li><input type="radio" name="NO5" value="a">2 detik</li>
                            <li><input type="radio" name="NO5" value="b">45 detik</li>
                            <li><input type="radio" name="NO5" value="c">1 jam</li>
                            <li><input type="radio" name="NO5" value="d">10 detik</li>
                            <li><input type="radio" name="NO5" value="e">24 jam</li>
                        </i>
                        </ol>
                        <br>
                    </div>

                    <button type="button" class="btn btn-primary" onclick="nilai()"> Submit </button>
                    <br>
            </form>
            <br>
            <h2 id="result">

            </h2>
        </div>

        <script src="js/function.js"></script>
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