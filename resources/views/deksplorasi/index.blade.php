@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DIVISI EKSPLORASI</h1>
            </div>
        </div>
    </div>
    <a href="/deksplorasi/create" class="btn btn-success">Tambah Data</a>
    @if (session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
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
            <th scope="row">1</th>
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
              <button type="submit" class="btn btn-primary">Edit</button>
              <form action="deksplorasi->id" method="POST">
                @method('delete');
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
</div>

@endsection
@extends('template/footer')