<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PROH</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>SMKN 2 Kraksaan Gardens</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="#gardens">Gardens</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#speciality">Speciality</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home">
        <div class="jumbotron jumbotron-fluid bgku mb-5">
            <div class="container">
                <div class="row align-items-center justify-content-between mt-5">
                    <div class="col-md-6">
                        <h1 class="jmb-text font-weight-bold text-color">Aneka Bahari & Hayati</h1>
                        <p class="text-secondary">"Di sekolah kami, kami memiliki taman lingkungan yang indah, di mana siswa
                            bisa belajar tentang tanaman dan ekosistem alami."</p>
                        <button style="border-radius: 50px;" type="button" class="btn btn-custom p-3 mt-5">Pelajari Lebih
                            Lanjut</button>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('img/3d.png')}}" class="float-right img-post">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5" id="gardens">
        <div class="container">
            <p class="text-color text-center" id="gardens"><b>We have several garden</b></p>
            <h2 class="mb-4 text-center font-weight-bold">Our Garden</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border">
                        <div class="card-body">
                            <h4 class="card-title">Kebun Mangga</h4>
                            <p class="text-secondary">Kebun mangga di sekolah kami adalah suatu keajaiban alami yang memikat hati setiap orang yang menginjakkan kaki di dalamnya. 
                                kebun ini merupakan tempat di mana kehidupan tumbuh subur dalam keharmonisan alam. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border">
                        <div class="card-body">
                            <h4 class="card-title">Kebun Pisang</h4>
                            <p class="text-secondary"> Buah-buah pisang yang tumbuh di sana selalu menjadi sajian sehat di
                                kantin
                                sekolah,
                                dan mereka juga digunakan dalam berbagai kegiatan belajar mengajar tentang pertanian dan
                                ekologi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card border">
                        <div class="card-body">
                            <h4 class="card-title">Kebun Tomat</h4>
                            <p class="text-secondary">Di sekolah kami, kami memiliki sebuah kebun tomat yang dikelola oleh
                                siswa-siswi.
                                Mereka dengan antusias merawat tanaman-tanaman tomat dan belajar tentang pertanian secara
                                praktis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card border">
                        <div class="card-body">
                            <h4 class="card-title">Kebun Bunga</h4>
                            <p class="text-secondary">Kebun bunga di sekolah kami adalah tempat yang menginspirasi dan
                                mempesona.
                                Setiap musim,
                                kami bekerja sama untuk merawat dan menjaga berbagai jenis bunga yang mekar dengan indah di
                                kebun ini. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="speciality-section" id="speciality">
        <div class="container pt-5 pb-5">
            <p class="text-color text-center" id="speciality"><b>We speciality</b></p>
            <h2 class="mb-4 text-center font-weight-bold">Speciality</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/gambar7.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Best Maintenance</h4>
                            <p class="text-secondary">Kami menanam tanaman perawatan rendah di sekolah untuk
                                memastikan
                                keindahan taman
                                sekolah kami tetap terjaga tanpa memerlukan banyak upaya pemeliharaan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/gambar8.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Best Plants</h4>
                            <p class="text-secondary">Tanaman tomat adalah pilihan terbaik di sekolah kami karena selain
                                mudah
                                dirawat,
                                mereka juga memberikan kesempatan pendidikan yang berharga bagi siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top " src="{{asset('img/gambar9.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Best Garden</h4>
                            <p class="text-secondary">Kebun pisang adalah pilihan terbaik di sekolah kami karena mereka
                                memberikan nuansa tropis yang indah,
                                serta menyediakan buah yang lezat yang dapat dikonsumsi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('script.js')}}"></script>

</body>

</html>