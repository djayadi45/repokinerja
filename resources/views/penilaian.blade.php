@extends('template/header')
@extends('template/menu')
@section('container')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$nama}}</h1>
            </div>
        </div>
    </div>
    
</div>
@endsection

@extends('template/footer')