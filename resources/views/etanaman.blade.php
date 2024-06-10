    @extends('layout.admin')
    @section('konten')

    <form action="{{url('tabeltanaman/update', $cari->kode_tanaman)}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="container mt-5 mb-5 tabelrespon">
    <div class="row"> 
      <div class="col">
        <div class="card">
          <div class="card-header"><b>Edit Tanaman</b></div>
          <div class="card-body">

          <div class="form-group">
            <label for="">Nama Tanaman</label>
            <input type="text" name="nama" id="" class="form-control" value="{{$cari->nama_tanaman}}">
          </div>
          <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" name="deskripsi" id="" class="form-control" value="{{$cari->deskripsi_tanaman}}">
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="gambar" id="" class="form-control">
          </div>
          <div class="form-group">
            <img src="{{ asset('img/'. $cari->gambar) }}" alt="" width="100px" height="100px">
          </div>

          </div>
             <div class="card-footer" style="background-color: white;">
                            <input type="submit" value="Simpan Data" class="btn btn-primary" style="width: 150px;">
                            <a href="{{url('tabeltanaman')}}" class="btn btn-outline-danger">Kembali</a>
                        </div>
        </div>
      </div>
    </div>
  </div>
  </form>

    @endsection