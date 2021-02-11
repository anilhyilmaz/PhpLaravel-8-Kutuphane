@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title',$data->title . ' Ürün Listesi')
@section('description')
    {{$data->description}}
@endsection
@section('keywords',$data->keywords)


@section('content')
    <div id="breadcumb">
        <div class="container">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Ürün Listesi</a></li>
                <li class="breadcrumb-item active"
                    aria-current="page">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
            </ol>
        </div>
    </div>


<section class="recomended-sec">
    <div class="section">
        <div class="container">
            <div class="row">
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
    </div>
    </div>
</section>
@endsection
