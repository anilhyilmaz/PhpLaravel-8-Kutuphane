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


        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="panel-title">İletişim Bilgileri</h3>
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-5">
                    <h3 class="panel-title">İletişim Formu</h3>
                    @include('home.message')
                    <form id="checkout_form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="billing-details">
                            <div class="form-group">
                                <input class="input" type="text" name="name" placeholder="Ad Soyad">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="phone" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="subject" placeholder="Konu">
                            </div>
                            <textarea class="input" name="message" placeholder="Mesajınız">

                            </textarea>
                            <div class="form-group">
                                <input class="input" type="text" name="city" placeholder="Şehir">
                            </div>
                                <button class="primary-btn">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
