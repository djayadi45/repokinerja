@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 .col-md-offset-4">
                <h1 class="page-header">INDIKATOR KOMPETENSI</h1>
                <div class="col-lg-12">
                  <a href="/indikatorkompetensi/create" class="btn btn-success">Tambah Data</a>
                      @if (session('status'))
                          <div class="alert alert-success">
                            {{session('status')}}
                          </div>
                      @endif
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Indikator Kompetensi
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Faktor Indikator</th>
                                          <th scope="col">Nama Indikator Kompetensi</th>
                                          <th scope="col">Bobot</th>
                                          <th scope="col">Target</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($indikatorkompetensi as $ind)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                      <td>{{$ind->fakom_id}}</td>
                                      <td>{{$ind->namaIndikator}}</td>
                                      <td>{{$ind->bobot}}</td>
                                      <td>{{$ind->target}}</>
                                      <td>
                                        <a href="/indikatorkompetensi/{{$ind->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                        <form action="/indikatorkompetensi/{{$ind->id}}" method="POST" class="inline-block">
                                          @method('delete')
                                          @csrf
                                          <button type="submit" class="btn btn-danger btn-xs" onsubmit="return confirm('Yakin?')">Delete</button>
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