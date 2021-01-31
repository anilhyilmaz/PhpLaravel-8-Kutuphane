@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title',$data->title)
@section('description')
    {{$data->description}}
@endsection
@section('keywords',$data->keywords)

@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->category->title)}} / </li>
                <li class="active">{{$data->title}}</li>
            </ul>
        </div>
    </div>



    <section class="product-sec">
        <div class="container">
            <h1>{{$data->title}}</h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <!-- main slider carousel -->

                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{Storage::url($data->image)}}" style="height: 450px" class="img-fluid">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0"  data-slide-to="1" data-target="#myCarousel">
                                    <img src="{{Storage::url($data->image)}}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0"  data-slide-to="2" data-target="#myCarousel">
                                    <img src="{{Storage::url($data->image)}}" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>

{{--                    <div id="myCarousel" class="carousel slide">--}}
{{--                        <!-- main slider carousel items -->--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="active item carousel-item" data-slide-number="0">--}}
{{--                                <img src="{{Storage::url($data->image)}}" style="height: 500px">--}}
{{--                            </div>--}}
{{--                            @foreach($datalist as $rs)--}}
{{--                            <div class="active item carousel-item" data-slide-number="0">--}}
{{--                                <img src="{{Storage::url($rs->image)}}">--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!--/main slider carousel-->
                </div>
                <div class="col-md-6 slider-content">
                    <p>{!! $data->detail !!}</p>
                    <div class="btn-sec">
                        <button class="btn"><a href="{{route('addtocart',['id'=>$data->id])}}">Ödünç Al</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
