@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','Sipariş Kitaplarım')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css"
          rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
@endsection


@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">Sipariş Kitaplarım </a></li>
            </ul>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div id="main" class="col-md-10">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Fotograf</th>
                            <th>Kitap Adı</th>
                            <th>Yazar Adı</th>
                            <th>Rezervasyon Durumu</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs)
                            <tr>
                                <td>
                                @if($rs->product->image)
                                    <img src="{{Storage::url($rs->product->image)}}" height="50" alt="">
                                    @endif
                                    </td>
                                <td>
                                    <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}">
                                        {{$rs->product->title}}</a>
                                </td>
                                <td>{{$rs->product->yazar_adi}}</td>
                                <td>{{$rs->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

@endsection
