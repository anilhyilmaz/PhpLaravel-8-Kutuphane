@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title',$search . "Ürün Listesi")
@section('description')
    {{$data->description}}
@endsection
@section('keywords',$data->keywords)


@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                <li class="active"><a href="{{{$search}}}">Ürün Listesi</a></li>
            </ul>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row">
                <section class="static about-sec">
                    <div class="container">
                        <div class="recomended-sec">
                                @foreach($datalist as $rs)
                                <div class="col-lg-3 col-md-6">
                                    <div class="item">
                                        <img src="{{Storage::url($rs->image)}}" style="height: 200px" alt="img">
                                        <h3>{{$rs->title}}</h3>
{{--                                        <h6><span class="price">$49</span> / --}}
                                            <a href="#">Ödünç Al</a></h6>
                                        <div class="hover">
                                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
