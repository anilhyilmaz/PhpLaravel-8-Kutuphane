@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','Hakkımızda -' . $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)


@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home / </a></li>
                <li><a href="#"> Hakkımızda</a></li>
            </ul>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </div>
@endsection
