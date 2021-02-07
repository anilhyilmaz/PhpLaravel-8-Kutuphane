@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','Ürün Rezervasyon')



@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#" Rezervasyon></a></li>
            </ul>
        </div>
    </div>
    @php
        $days = strtotime($reservation_finish_date)-strtotime($reservation_date);
        $days = $days/86400;
    @endphp

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="md-cols-6">
                    <form id="checkout_form" action="{{route('user_reservation_store')}}" method="post">
                        @csrf
                        <p>Zaten Üye Misiniz?<a href="#" Giriş>Giriş</a></p>
                        <div class="section-title">
                            <h3 class="title">Rezervasyon Detayları</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="name" value="{{Auth::user()->name}}" placeholder="ad"
                                   style="width: 500px" height="30px">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="email" value="{{Auth::user()->email}}"
                                   placeholder="email" style="width: 500px" height="30px">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" value="{{Auth::user()->address}}"
                                   placeholder="adres" style="width: 500px" height="30px">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="phone" value="{{Auth::user()->phone}}"
                                   placeholder="telefon" style="width: 500px" height="30px">
                        </div>
                        <div class="form-group">
                            <label for="reservation">Rezervasyon Başlangıç = {{$reservation_date}}</label>
                        </div>
                        <div class="form-group">
                            <label for="reservation_finish">Rezervasyon Bitiş = {{$reservation_finish_date}}</label>
                        </div>
                        <div class="form-group">
                            <label for="days">Toplam Gün = {{$days}}</label>
                            {{--                            {{$reservation_finish_date - $reservation_date }}--}}
                        </div>
{{--                        ------------------------------------------}}
                        <div class="form-group">
                            <input class="input" type="hidden" name="reservation_date" value="{{$reservation_date}}"
                                   placeholder="telefon" style="width: 500px" height="30px">
                        </div>
                        <div class="form-group">
                            <input class="input" type="hidden" name="reservation_finish_date" value="{{$reservation_finish_date}}"
                                   placeholder="telefon" style="width: 500px" height="30px">
                        </div>
                        <div class="form-group">
                            <input class="input" type="hidden" name="days" value="{{$days}}"
                                   placeholder="telefon" style="width: 500px" height="30px">
                        </div>
{{--                        ---------------------------------------------}}
                        <div class="float-right">
                            <button type="submit" class="btn"> Ödünç Al</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
