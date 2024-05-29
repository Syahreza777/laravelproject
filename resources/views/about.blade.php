    @extends('layout.main')
    @section('konten')

    <!--  ABOUT SECTION  -->
    <section class="about-section">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-5 mr-5">
                    <img src="{{asset('img/ft-about.jpg')}}" width="450px" class="img-thumbnail-about"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-6">
                    <p class="text-color"><b>Profil Kami</b></p>
                    <h2 class="card-title text-malam"><b>Profil</b></h2>
                    <p class="text-secondary mb-4" style="text-align: justify; text-indent: 20px">Taman di SMKN 2 Kraksaan adalah 
                    ruang hijau yang santai dan nyaman. Dikelilingi oleh pepohonan dan tanaman hias, taman ini merupakan tempat 
                    peristirahatan yang ideal, serta pusat kegiatan sosial dan pembelajaran. Dengan fasilitas yang baik, ini 
                    mendukung kreativitas siswa, pertemuan kelompok, dan menyediakan lingkungan yang sehat untuk pengembangan siswa.</p>

                </div>
            </div>
    </section>



    <!--  WHAT WE DO  -->
    <section class="what-we-do-section">
        <div class="container pt-5 pb-5">
            <h2 class="card-title text-malam text-center"><b>Apa Yang Kami <span class="text-color">Lakukan</span> ?.</b></h2>
            <div class="row align-items-center mt-5">
                <div class="col">
                    <div class="card-about">
                        <div class="card-body m-2">
                            <div class="circle-about mb-4">
                                <p><b>1</b></p>
                            </div>
                            <h4 class="mb-4">Visi Kami</h4>
                            <p style="font-size: 14px; text-align: justify" class="text-secondary">Menciptakan Taman Sekolah Hijau dan Inspiratif untuk 
                            Mempromosikan Pembelajaran Kreatif dan Kesejahteraan Siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-about">
                        <div class="card-body m-2">
                            <div class="circle-about mb-4">
                                <p><b>2</b></p>
                            </div>
                            <h4 class="mb-4">Misi Kami</h4>
                            <p style="font-size: 14px; text-align: justify" class="text-secondary">Menggabungkan unsur-unsur alam dalam program pembelajaran 
                            untuk meningkatkan kreativitas dan pemahaman siswa.</p>
                        </div> 
                    </div>
                </div>
                <div class="col">
                    <div class="card-about">
                        <div class="card-body m-2">
                            <div class="circle-about mb-4">
                                <p><b>3</b></p>
                            </div>
                            <h4 class="mb-4">Hasil Kami</h4>
                            <p style="font-size: 14px; text-align: justify" class="text-secondary">Dorong kreativitas melalui integrasi elemen alam dan desain 
                            inspirasional di taman sekolah. Ciptakan tempat yang nyaman bagi para Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- OUR GARDENER -->
    <section class="pak-kebon-section">
        <div class="container pt-5 pb-5">
            <p class="text-color text-center" id="speciality"><b>Pak Kebon Kami</b></p>
            <h2 class="mb-4 text-center font-weight-bold text-malam">Pak Kebon</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card-pak-kebon text-center">
                        <img class="card-img-top" src="{{asset('img/maman.jpg')}}" alt="Card image">
                        <div class="card-body custom-pak-kebon"><b>Maman</b></div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card-pak-kebon text-center">
                        <img class="card-img-top" src="{{asset('img/ridho.jpg')}}" alt="Card image">
                        <div class="card-body custom-pak-kebon"><b>Ridho</b></div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card-pak-kebon text-center">
                        <img class="card-img-top" src="{{asset('img/james.jpg')}}" alt="Card image">
                        <div class="card-body custom-pak-kebon"><b>James</b></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection