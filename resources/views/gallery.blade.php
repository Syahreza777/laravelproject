    @extends('layout.main')
    @section('konten')

    <!-- GARDEN SECTION -->
    <section class="ourgarden-section" id="speciality">
        <div class="container pt-5 pb-5">
            <p class="text-color text-center" id="speciality"><b>Galeri Dari</b></p>
            <h2 class="mb-5 text-center font-weight-bold text-malam">Tanaman</h2>
            <div class="row">

            @foreach ($data as $item)
                <div class="col-md-4 mb-5">
                    <div class="card-gallery">
                        <img class="card-img-top ukuran" src="{{ asset('img/'. $item['gambar']) }}" alt="Card image">
                        <div class="card-body custom-gallery">
                            <h5 class="card-title">{{$item['nama_tanaman']}}</h5>
                            <p class="card-text">{{$item['deskripsi_tanaman']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

                </div>
            </div>
        </div>
    </section>

    @endsection