@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Indikator Kompetensi</h1>
            </div>
        </div>
    </div>

    <form method="POST" action="/indikatorkompetensi">
        @csrf
    <div class="form-group row">
        <label for="fakom_id" class="col-sm-2 col-form-label ">ID Faktor Kompetensi</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('fakom_id') is-invalid @enderror" id="fakom_id" placeholder="Masukan fakom_id" name="fakom_id" value="{{old('fakom_id')}}">
        @error('fakom_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="namaIndikator" class="col-sm-2 col-form-label">Nama Indikator</label>
        <div class="col-sm-10">
        <input type="text" class="form-control  @error('namaIndikator') is-invalid @enderror" id="namaIndikator" placeholder="Masukan Nama Indikator" name="namaIndikator" value="{{old('namaIndikator')}}">
        @error('namaIndikator')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bobot" class="col-sm-2 col-form-label ">Bobot</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot" placeholder="Masukan Bobot" name="bobot" value="{{old('bobot')}}">
        @error('bobot')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="target" class="col-sm-2 col-form-label ">Target</label>
        <div class="col-sm-10 ">
        <input type="text" class="form-control " id="target" placeholder="Masukan Target" name="target" value="{{old('target')}}">
        @error('target')
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