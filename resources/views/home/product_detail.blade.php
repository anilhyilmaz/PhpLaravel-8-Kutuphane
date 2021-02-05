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
                <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->category->title)}}
                    /
                </li>
                <li class="active">{{$data->title}}</li>
            </ul>
            @include('home.message')
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
                                <a id="carousel-selector-0" data-slide-to="1" data-target="#myCarousel">
                                    <img src="{{Storage::url($data->image)}}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" data-slide-to="2" data-target="#myCarousel">
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


                {{--                <div>--}}
                {{--                    @php--}}
                {{--                    $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);--}}
                {{--                    $countreview = \App\Http\Controllers\HomeController::countreview($data->id);--}}
                {{--                    @endphp--}}
                {{--                    <div class="product-rating">--}}
                {{--                        <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>--}}
                {{--                        <i class="fa fa-star @if($rs->rate<2) -o empty @endif"></i>--}}
                {{--                        <i class="fa fa-star @if($rs->rate<3) -o empty @endif"></i>--}}
                {{--                        <i class="fa fa-star @if($rs->rate<4) -o empty @endif"></i>--}}
                {{--                        <i class="fa fa-star @if($rs->rate<5) -o empty @endif"></i>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-md-6 slider-content">
                    <p>{!! $data->detail !!}</p>
                    <form action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="btn-sec">
                            <button type="submit" class="btn"> Ödünç Al</button>
                        </div>
                    </form>
                </div>
                {{--                <p>Review : {{$countreview}}}</p>--}}
                {{--                <div class="row">--}}
                {{--                    <div class="col-md-6">--}}
                {{--                        <div class="product-reviews">--}}
                {{--                            @foreach($reviews as $rs)--}}
                {{--                                <div class="single-review">--}}
                {{--                                    <div class="review-heading">--}}
                {{--                                        <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}} </a> </div>--}}
                {{--                                        <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}} </a> </div>--}}
                {{--                                        <div class="review-rating pull-right">--}}
                {{--                                            <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>--}}
                {{--                                            <i class="fa fa-star @if($rs->rate<2) -o empty @endif"></i>--}}
                {{--                                            <i class="fa fa-star @if($rs->rate<3) -o empty @endif"></i>--}}
                {{--                                            <i class="fa fa-star @if($rs->rate<4) -o empty @endif"></i>--}}
                {{--                                            <i class="fa fa-star @if($rs->rate<5) -o empty @endif"></i>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="review-body">--}}
                {{--                                        <strong>{{$rs->subject}}</strong>--}}
                {{--                                        <p>{{$rs->review}}</p>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                @endforeach--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-md-6">
                    <h4 class="text-uppercase">Write Your review</h4>
                    @livewire('review',['id'=>$data->id])
                </div>
            </div>
        </div>
    </section>
@endsection
