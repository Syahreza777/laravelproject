    @extends('layout.main')
    @section('konten')

    <!-- ABOUT SECTION -->
    <section id="about" class="mb-3" style="padding: 5rem 0;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-5 mr-5">
                                <img src="assets/images/about.jpg" width="500px" class="img-thumbnail"
                                    alt="Cinque Terre">
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <p class="text-color fw-bold mt-4">Profil Kami</p>
                                <h2 class="card-title text-dark fw-bold"><b>Profil</b></h2>
                                <p class="text-secondary mb-4" style="text-align: justify; text-indent: 20px">Taman SMKN
                                    2 Kraksaan
                                    adalah oasis hijau yang mempesona di tengah kebisingan sekolah. Dengan berbagai
                                    tanaman yang
                                    indah dan
                                    dipelihara dengan penuh kasih, Setiap sudut dipenuhi dengan flora warna-warni,
                                    menciptakan
                                    lingkungan
                                    yang nyaman untuk belajar dan berkumpul. Keberadaan taman ini tidak hanya
                                    mempercantik
                                    lingkungan sekolah,
                                    tetapi juga mengajarkan nilai-nilai kebersihan, keindahan, dan kecintaan terhadap
                                    alam kepada
                                    seluruh
                                    penghuni SMKN 2 Kraksaan..</p>
                                <a href="about">
                                    <button style="border-radius: 10px;" type="button" class="btn btn-custom mt-3">Baca
                                        Selengkapnya
                                        >>
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </section>



    <!-- GARDEN SECTION -->

    <section id="gardens" class="mb-3" style="padding: 5rem 0; background: whitesmoke;">
                    <div class="container">
                        <p class="text-color text-center fw-bold" id="gardens">Kategori Tanaman</p>
                        <h2 class="mb-4 text-center text-dark fw-bold text-dark">Kategori</h2>
                        <div class="row">
                            
                        @foreach ($data as $item)
                            <div class="col-md-12 col-lg-6 mb-4">
                                <a href="gallery" class="card">
                                    <div class="card-body m-2">
                                        <div class="circle mb-4">
                                            <img src="{{ asset('img/'. $item['gambar']) }}" alt="Ikon">
                                        </div>
                                        <h4 class="card-title mb-4 text-dark"> {{$item['nama_kategori']}}
                                            <i class='bx bx-right-arrow-alt mr-4 fw-bold fs-2'
                                                style="float: right;"></i>
                                        </h4>
                                        <p class="text-secondary" style="text-align: justify;">
                                            {{$item['deskripsi']}}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>



    <!-- SPECIALITY SECTION -->
    <section id="speciality mb-3" style="padding: 5rem 0;">
                    <div class="container">
                        <p class="text-color text-center fw-bold" id="speciality">Top 3 Terbaik</p>
                        <h2 class="mb-4 text-center fw-bold text-dark">Terbaik</h2>
                        <div class="row">
                            <div class="col-md-12 col-lg-4 mb-4">
                                <div class="card">
                                    <img class="card-img" src="assets/images/gambar7.jpg" alt="Card image">
                                    <div class="card-body m-2">
                                        <h4 class="card-title mb-4 text-malam">Perawatan Terbaik</h4>
                                        <p class="text-secondary" style="text-align: justify;">Kami menanam tanaman
                                            dengan perawatan
                                            rendah di sekolah untuk memastikan
                                            keindahan taman sekolah kami terjaga tanpa membutuhkan pemeliharaan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 mb-4">
                                <div class="card">
                                    <img class="card-img" src="assets/images/gambar8.jpg" alt="Card image">
                                    <div class="card-body m-2">
                                        <h4 class="card-title mb-4 text-malam">Tanaman Terbaik</h4>
                                        <p class="text-secondary" style="text-align: justify;">Tanaman tomat adalah
                                            pilihan terbaik
                                            di sekolah kami karena mudah dirawat,
                                            mereka juga memberikan peluang pendidikan yang berharga bagi siswa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 mb-4">
                                <div class="card">
                                    <img class="card-img" src="assets/images/gambar9.jpg" alt="Card image">
                                    <div class="card-body m-2">
                                        <h4 class="card-title mb-4 text-malam">Kebun Terbaik</h4>
                                        <p class="text-secondary" style="text-align: justify;">Kebun pisang adalah
                                            pilihan terbaik
                                            di sekolah kami karena memberikan nuansa
                                            tropis yang indah, serta menyediakan buah lezat yang dapat dikonsumsi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    @endsection