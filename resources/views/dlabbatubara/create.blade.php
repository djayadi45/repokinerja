@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Pegawai Div.Lab Batu Bara</h1>
            </div>
        </div>
    </div>

    <form method="POST" action="/dlabbatubara">
        @csrf
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label ">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{old('nama')}}">
        @error('nama')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nik" class="col-sm-2 col-form-label ">NIK</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan NIK" name="nik" value="{{old('nik')}}">
        @error('nik')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="ttl" class="col-sm-2 col-form-label ">TTL</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" placeholder="Masukan Tempat, Tanggal Lahir" name="ttl" value="{{old('ttl')}}">
        @error('ttl')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <small id="ttlHelp" class="form-text text-muted">Contoh : Bandung, 30-04-1997</small>
        </div>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="jenisKelamin" value="L" checked="">Laki-laki
        </label>
        <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="jenisKelamin" value="P">Perempuan
        </label>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label ">Alamat</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{old('alamat')}}">
        @error('alamat')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="statusKel" class="col-sm-2 col-form-label">Status Keluarga</label>
        <div class="col-sm-10">
        <input type="text" class="form-control  @error('statusKel') is-invalid @enderror" id="statusKel" placeholder="Masukan Status Keluarga" name="statusKel" value="{{old('statusKel')}}">
        @error('statusKel')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <small id="statusKelHelp" class="form-text text-muted">Contoh : K / 1</small>
        </div>
    </div>
    <div class="form-group row">
        <label for="mulaiKerja" class="col-sm-2 col-form-label ">Mulai Kerja</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('mulaiKerja') is-invalid @enderror" id="mulaiKerja" placeholder="Masukan Tanggal Pertama Kerja" name="mulaiKerja" value="{{old('mulaiKerja')}}">
        @error('mulaiKerja')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <small id="mulaiKerjaHelp" class="form-text text-muted">Contoh : YY-MM-DD (2012-12-30)</small>
        </div>
    </div>
    <div class="form-group row">
        <label for="statusKep" class="col-sm-2 col-form-label ">Status Kepegawaian</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('statusKep') is-invalid @enderror" id="statusKep" placeholder="Masukan Status Kepegawaian" name="statusKep" value="{{old('statusKep')}}">
        @error('statusKep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <small id="statusKepHelp" class="form-text text-muted">Contoh : </small>
        </div>
    </div>
    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label ">Jabatan</label>
        <div class="col-sm-10 ">
        <input type="text" class="form-control " id="jabatan" placeholder="Masukan Jabatan" name="jabatan" value="{{old('jabatan')}}">
        @error('jabatan')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    
    </form>

</div>

@endsection
@extends('template/footer')