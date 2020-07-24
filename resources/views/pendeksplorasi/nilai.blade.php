@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 .col-md-offset-4">
                <h1 class="page-header">PENILAIAN DIVISI LAB BATUBARA</h1> 
                <table border=1>
                    <tr>
                        <td><h4 style="padding-left: 10px; padding-right: 10px">Nama Karyawan</h4></td>
                        <td><h4 style="padding-left: 10px; padding-right: 10px">{{$pendeksplorasi->nama}}</h4></td>
                    </tr>
                    <tr>
                        <td><h4 style="padding-left: 10px; padding-right: 10px">Jabatan - NIP</h4></td>
                        <td><h4 style="padding-left: 10px; padding-right: 10px">{{$pendeksplorasi->jabatan}} - {{$pendeksplorasi->nik}}</h4></td>
                    </tr>
                    <tr>
                        <td><h4 style="padding-left: 10px; padding-right: 10px">Tanggal Mulai Kerja</h4></td>
                        <td><h4 style="padding-left: 10px; padding-right: 10px">{{$pendeksplorasi->mulaiKerja->format('d-m-Y')}}</h4></td>
                    </tr>
                </table>
                <input id="idpeg" type="hidden" value={{$pendeksplorasi->id}}>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id='penilaianTable'>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Faktor Indikator</th>
                                    <th scope="col">Indikator Penilaian</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Total Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lisindikator as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->namaFaktorKompetensi}}</td>
                                    <td>{{$item->namaIndikator}}</td>
                                    <td>{{$item->bobot * 100}}%</td>
                                    <td><input type="text" value={{$item->nilai}}></td>
                                    <td>{{$item->target}}</td>
                                    <td>{{$item->nilai * $item->bobot}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <br/>
                    <input type='button' value='Save' id='but_save'>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --> <!-- jQuery CDN -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type='text/javascript'>
     $(document).ready(function(){
        var dataArr = [];
        var idpeg = $('#idpeg').val();
        $("td").each(function(){
            dataArr.push($(this).html());
        });

       // Fetch all records
       $('#but_save').click(function(){
	        saveRecords(dataArr, idpeg);
       });

     });

    function saveRecords(dataArr, idpeg){
        alert("Data berhasil Disimpan");
        var data = { items: JSON.stringify(dataArr), idpeg: idpeg };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/pendlabbatubara/savePenilaian",
            type: "POST",
            data: data,
            cache: false,
            contentType: 'application/json; charset=utf-8',
            processData: false,
            success: function (response)
            {
                console.log(response);
            }
        });
    }
</script>

@endsection
@extends('template/footer')