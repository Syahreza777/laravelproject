<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin`Ku</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>


<!-- NAVBAR  -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #1f242d">
        <div class="container pt-1 pb-1">
            <a class="navbar-brand" href="#" style="color: #fff"><b>Admin<span class="text-color">`Ku</span></b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="tabeltanaman" style="color: #fff">Tanaman</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="tabelkategori" style="color: #fff">Kategori</a>
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
                <div class="col-md-5">
                    <h4 class="pb-2" style="color: #e0e0e0"><b>Admin <span class="text-color">`Ku</span></b></h3>
                        <p class="text-footer">Web ini berisi data-data tentang Aneka Maritim & Keanekaragaman Hayati di SMKN 2
                            Kraksaan</p>
                        <p class="text-footer pt-4">&copy; 2023 Website Aneka Bahari & Hayati SMKN 2 Kraksaan</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-color pb-2"><b>Halaman</b></h4>
                    <p class="text-footer">- Tanaman</p>
                    <p class="text-footer">- Kategori</p>
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