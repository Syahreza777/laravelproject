    @extends('layout.main')
    @section('konten')

    <!-- GARDEN SECTION -->
    <section id="ourgarden" style="padding: 5rem 0">
        <div class="container">
            <p class="text-color text-center fw-bold">Galeri Dari</p>
            <h2 class="mb-5 text-center fw-bold text-dark">Tanaman</h2>
            <div class="row">

            @foreach ($data as $item)
                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top ukuran" src="{{ asset('img/'. $item['gambar']) }}" alt="Card image">
                        <div class="card-body">
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