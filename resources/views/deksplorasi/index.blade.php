@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 .col-md-offset-4">
                <h1 class="page-header">DIVISI EKSPLORASI</h1>
                <div class="col-lg-12">
                  <a href="/deksplorasi/create" class="btn btn-success">Tambah Data</a>
                      @if (session('status'))
                          <div class="alert alert-success">
                            {{session('status')}}
                          </div>
                      @endif
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Data Pegawai
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th scope="col">Nama </th>
                                          <th scope="col">NIK</th>
                                          <th scope="col">TTL</th>
                                          <th scope="col">Jenis Kelamin</th>
                                          <th scope="col">Alamat</th>
                                          <th scope="col">Status Keluarga</th>
                                          <th scope="col">Mulai Kerja</th>
                                          <th scope="col">Status Kepegawaian</th>
                                          <th scope="col">Jabatan</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($deksplorasi as $deks)
                                    <tr>
                                      <td>{{$deks->nama}}</td>
                                      <td>{{$deks->nik}}</td>
                                      <td>{{$deks->ttl}}</td>
                                      <td>{{$deks->jenisKelamin}}</td>
                                      <td>{{$deks->alamat}}</td>
                                      <td>{{$deks->statusKel}}</td>
                                      <td>{{$deks->mulaiKerja}}</td>
                                      <td>{{$deks->statusKep}}</td>
                                      <td>{{$deks->jabatan}}</td>
                                      <td>
                                        <a href="/deksplorasi/{{$deks->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="/deksplorasi/{{$deks->id}}" method="POST" class="inline-block">
                                          @method('delete')
                                          @csrf
                                          <button type="submit" class="btn btn-danger" onsubmit="return confirm('Yakin?')">Delete</button>
                                        </form>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <!-- /.table-responsive -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('template/footer')