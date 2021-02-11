@php
 $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','Anıl Kitap Ödünç Sitesi')
@section('description')
    'Anıl Kitap Ödünç Sitesi'
@endsection
@section('keywords','kitap')
@section('footerjs')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
@endsection

@section('content')

    @include('home._slider')

    <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>En Çok Tercih Edilen Kitaplar</h2>
                <hr>
            </div>
            <div class="row">
                @foreach($daily as $rs)
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="{{Storage::url($rs->image)}}" style="height: 200px" alt="img">
                        <h3>{{$rs->title}}</h3>
                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Ödünç Al</a></h6>
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
    <section class="about-sec">
        <div class="about-img">
            <img src="{{asset('assets')}}/images/kutuphane.jpg">
        </div>
        <div class="about-content">
            <h2>Kütüphanemiz Hakkında</h2>
            <p>Üniversitemizin ise 10. kuruluş yıl dönümü olan 3 Nisan 2017 yılında taşınılmış olup kütüphane binası hayırsever
                iş adamı Kamil GÜLEÇ tarafından eğitime % 100 destek kapsamında yaptırılmıştır.
            <p>4000 m² olan Merkez Kamil Güleç Kütüphane Binası  iklimlendirilmiş çalışma ve araştırma alanlarının yanı sıra peyzajlı yeşil alanlar ve sanat galerisi ile rafa dizilmiş kitapları gösteren dikkat çekici bir mimariye sahiptir. </p>
            </p>
        </div>
    </section>

    <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>Günlük Kitaplar</h2>
                <hr>
            </div>
            <div class="row">
                @foreach($daily as $rs)
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="{{Storage::url($rs->image)}}" style="height: 200px" alt="img">
                            <h3>{{$rs->title}}</h3>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Ödünç Al</a></h6>
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

    <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>Son Eklenen Kitaplar</h2>
                <hr>
            </div>
            <div class="row">
                @foreach($last as $rs)
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="{{Storage::url($rs->image)}}" style="height: 200px" alt="img">
                            <h3>{{$rs->title}}</h3>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Ödünç Al</a></h6>
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

@endsection
