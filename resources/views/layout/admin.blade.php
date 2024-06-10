<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin`Ku</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/boxicons/css/boxicons.min.css')}}">
</head>

<body>


<!-- NAVBAR  -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
        <div class="container py-1">
            <a class="navbar-brand fw-bold" href="#">Admin<span class="text-color">`Ku</span></a>
            <div class="toggle-menu" id="toggle-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar-nav ml-auto gap-4" id="navbar-nav">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="tabeltanaman">Tanaman</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="tabelkategori">Kategori</a>
                </li>
                <!-- <li class="nav-item active mr-4">
                            <a class="nav-link" href="contact">Contact</a>
                            </li> -->
            </ul>
        </div>
    </nav>

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
                    <p class="text-footer">- Tanaman</p>
                    <p class="text-footer">- Kategori</p>
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