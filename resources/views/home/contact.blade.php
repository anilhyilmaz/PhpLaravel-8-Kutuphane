@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','İletişim -' . $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)


@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home / </a></li>
                <li><a href="#"> İletişim </a></li>
            </ul>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="panel-title">İletişim Bilgileri</h3>
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-4">
                    <h3 class="panel-title">İletişim Formu</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
