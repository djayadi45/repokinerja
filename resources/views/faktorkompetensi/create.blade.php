@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Faktor Kompetensi</h1>
            </div>
        </div>
    </div>

    <form method="POST" action="/faktorkompetensi">
        @csrf
    <div class="form-group row">
        <label for="namaFaktorKompetensi" class="col-sm-2 col-form-label ">Nama Faktor Komptensi</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('namaFaktorKompetensi') is-invalid @enderror" id="namaFaktorKompetensi" placeholder="Masukan Nama Faktor Komptensi" name="namaFaktorKompetensi" value="{{old('namaFaktorKomptensi')}}">
        @error('namaFaktorKompetensi')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bobot" class="col-sm-2 col-form-label ">Bobot</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot" placeholder="Masukan bobot" name="bobot" value="{{old('bobot')}}">
        @error('bobot')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
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