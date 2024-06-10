    @extends('layout.admin')
    @section('konten')

    <div class="container mt-5 mb-5 tabelrespon">
    <div class="row"> 
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"><b>Data Tanaman</b></div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped mt-3">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Nama Tanaman</td>
                  <td>Deskripsi</td>
                  <td>Gambar</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d => $r)
                <tr>
                  <td>{{$d+1}}</td>
                  <td>{{$r->nama_tanaman}}</td>
                  <td>{{$r->deskripsi_tanaman}}</td>
                  <td style="text-align: center; vertical-align: middle;">
                    <img src="{{ asset('img/'. $r->gambar) }}" alt="" width="100px" height="100px">
                  </td>
                  <td>
                    <a href="{{url('tabeltanaman/edit/'.$r->kode_tanaman)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('tabeltanaman/hapus/'.$r->kode_tanaman)}}" onclick="return confirm('Anda Yakin?')"
                      class="btn btn-danger">Hapus</a>
                      
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
             <div class="card-footer" style="background-color: white;">
                           <a href="{{url('tabeltanaman/tambah')}}" class="btn btn-outline-primary">Tambah Data</a>
                        </div>
        </div>
      </div>
    </div>
  </div>

    @endsection