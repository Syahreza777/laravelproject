<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garden`Ku</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>


<!-- NAVBAR  -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-light">
        <div class="container pt-1 pb-1">
            <a class="navbar-brand" href="#"><b>Garden<span class="text-color">`Ku</span></b></a>
            <ul class="navbar-nav ml-auto">
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
    <section id="home">
        <div class="jumbotron jumbotron-fluid bgku">
            <div class="container">
                <div class="row align-items-center justify-content-between mt-5 mb-5">
                    <div class="col-md-6">
                        <p class="text-color jmb-text"><b>Selamat Datang Di</b></p>
                        <h1 class="font-weight-bold text-malam">Aneka Bahari & Hayati</h1>
                        <p class="text-secondary">"Di SMKN 2 Kraksaan, kami memiliki taman lingkungan yang indah, di mana
                            Siswa dapat belajar tentang tumbuhan dan ekosistem alami."</p>

                        <p class="text-secondary mt-5">Ikuti Media Sosial Kami :</p>
                        <a href="https://www.instagram.com/smkn2kraksaan/" class="icons">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/smknegeri2kraksaan/" class="icons">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.youtube.com/results?search_query=smkn+2+kraksaan" class="icons">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.linkedin.com/school/smk-negeri-2-kraksaan/people/?originalSubdomain=id"
                            class="icons">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('img/3d.png')}}" class="float-right img-post">
                    </div>
                </div>
            </div>
        </div>
    </section>

     @yield('konten')

      <footer>
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="pb-2" style="color: #e0e0e0"><b>Garden <span class="text-color">`Ku</span></b></h3>
                        <p class="text-footer">Web ini membahas tentang Aneka Maritim & Keanekaragaman Hayati di SMKN 2
                            Kraksaan</p>
                        <p class="text-footer pt-4">&copy; 2023 Website Aneka Bahari & Hayati SMKN 2 Kraksaan</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-color pb-2"><b>Halaman</b></h4>
                    <p class="text-footer">- Beranda</p>
                    <p class="text-footer">- Tentang</p>
                    <p class="text-footer">- Galeri</p>
                </div>
                <div class="col-md-4">
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

    <script src="{{asset('script.js')}}"></script>

    </body>

</html>