@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 .col-md-offset-4">
                <h1 class="page-header">FAKTOR KOMPETENSI</h1>
                <div class="col-lg-12">
                  <a href="/faktorkompetensi/create" class="btn btn-success">Tambah Data</a>
                      @if (session('status'))
                          <div class="alert alert-success">
                            {{session('status')}}
                          </div>
                      @endif
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Faktor Kompetensi
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama Faktor Kompetensi</th>
                                          <th scope="col">Bobot</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($faktorkompetensi as $fak)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                      <td>{{$fak->namaFaktorKompetensi}}</td>
                                      <td>{{$fak->bobot}}</td>
                                      <td>
                                        <a href="/faktorkompetensi/{{$fak->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                        <form action="/faktorkompetensi/{{$fak->id}}" method="POST" class="inline-block">
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