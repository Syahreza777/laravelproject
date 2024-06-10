<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garden`Ku</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/boxicons/css/boxicons.min.css')}}">
</head>

<body>


<!-- NAVBAR  -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
        <div class="container py-1">
            <a class="navbar-brand fw-bold" href="#">Garden<span class="text-color">`Ku</span></a>
            <div class="toggle-menu" id="toggle-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar-nav ml-auto gap-4" id="navbar-nav">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="projectku">Beranda</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="about">Tentang</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="gallery">Galeri</a>
                </li>
                <!-- <li class="nav-item active mr-4">
                            <a class="nav-link" href="contact">Contact</a>
                            </li> -->
            </ul>
        </div>
    </nav>

    <!-- JUMBOTRON -->
     <section class="mb-3" id="home" style="padding: 7rem 0; background: whitesmoke;">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-12 col-lg-6">
                                <p class="text-color fw-bold">Selamat Datang Di</p>
                                <h1 class="fw-bold text-malam">Aneka Bahari & Hayati</h1>
                                <p class="text-secondary" style="text-align: justify;">"Di SMKN 2 Kraksaan, kami
                                    memiliki taman
                                    lingkungan yang indah, di mana
                                    Siswa dapat belajar tentang tumbuhan dan ekosistem alami."</p>

                                <p class="text-secondary mt-5">Ikuti Media Sosial Kami :</p>
                                <div class="d-flex gap-2">
                                    <a href="https://www.instagram.com/smkn2kraksaan/" class="icons">
                                        <i class="bx bxl-instagram fs-5"></i>
                                    </a>
                                    <a href="https://www.facebook.com/smknegeri2kraksaan/" class="icons">
                                        <i class="bx bxl-facebook fs-5"></i>
                                    </a>
                                    <a href="https://www.youtube.com/results?search_query=smkn+2+kraksaan"
                                        class="icons">
                                        <i class="bx bxl-youtube fs-5"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/school/smk-negeri-2-kraksaan/people/?originalSubdomain=id"
                                        class="icons">
                                        <i class="bx bxl-linkedin fs-5"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-12 col-lg-6">
                                <img src="assets/images/3d.png" class="img-fluid">
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

     @yield('konten')

      <footer>
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <h4 class="pb-2" style="color: #e0e0e0"><b>Garden <span class="text-color">`Ku</span></b></h3>
                        <p class="text-footer">Web ini membahas tentang Aneka Maritim & Keanekaragaman Hayati di SMKN 2
                            Kraksaan</p>
                        <p class="text-footer pt-4 pb-4">&copy; 2023 Website Aneka Bahari & Hayati SMKN 2 Kraksaan</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <h4 class="text-color pb-2"><b>Halaman</b></h4>
                    <p class="text-footer">- Beranda</p>
                    <p class="text-footer">- Tentang</p>
                    <p class="text-footer pb-4">- Galeri</p>
                </div>
                <div class="col-md-12 col-lg-4">
                    <h4 class="text-color pb-2"><b>Kontak</b></h4>
                    <p class="text-footer">
                        <i class="fas fa-search-location mr-4"></i>Jl. Diponegoro No 05
                    </p>
                    <p class="text-footer">
                        <i class="fas fa-phone mr-4"></i>0335-846407
                    </p>
                    <p class="text-footer">
                        <i class="fa fa-envelope mr-4"></i>smkn2kraksaan@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('assets/js/script.js')}}"></script>
    </body>

</html>