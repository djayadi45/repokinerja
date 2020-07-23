@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 .col-md-offset-4">
                <h1 class="page-header">PENILAIAN DIVISI LAB BATUBARA</h1>
                <h1 class="page-header">{{$pendlabbatubara->nama}}</h1>
                <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th scope="col">Faktor Indikator</th>
                                          <th scope="col">Indikator Penilaian</>
                                          <th scope="col">Bobot</th>
                                          <th scope="col">Nilai</th>
                                          <th scope="col">Target</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($lisindikator as $item)
                                        <tr>
                                            <td>{{$item->namaFaktorKompetensi}}</td>
                                            <td>{{$item->namaIndikator}}</td>
                                            <td>{{$item->bobot}}</td>
                                            <td></td>
                                            <td>{{$item->target}}</td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <!-- /.table-responsive -->
                      </div>
                      <!-- /.panel-body -->
              </div>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('template/footer')