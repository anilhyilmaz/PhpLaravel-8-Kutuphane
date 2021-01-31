@php
 $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','ggg')
@section('description')
    'ggg'
@endsection
@section('keywords','ggg')


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
            <figure style="background:url({{asset('assets')}}/images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <a href="shop.html" class="btn yellow">shop books</a>
                <a href="login.html" class="btn black">subscriptions</a>
            </div>
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


    <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
            </ul>
        </div>
    </section>
    <section class="offers-sec" style="background:url({{asset('assets')}}/images/offers.jpg)no-repeat;">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Top 50% OFF on Selected</h3>
                        <h6>We are now offering some good discount
                            on selected books go and shop them</h6>
                        <a href="products.html" class="btn blue-btn">view all books</a>
                        <span class="icon-point percentage">
                            <img src="{{asset('assets')}}/images/precentagae.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Shop $ 500 Above and Get Extra!</h3>
                        <h6>We are now offering some good discount
                            on selected books go and shop them</h6>
                        <a href="products.html" class="btn blue-btn">view all books</a>
                        <span class="icon-point amount"><img src="{{asset('assets')}}/images/amount.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-sec">
        <div class="container">
            <div id="testimonal" class="owl-carousel owl-theme">
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-quote">
            <img src="{{asset('assets')}}/images/left-quote.png" alt="quote">
        </div>
        <div class="right-quote">
            <img src="{{asset('assets')}}/images/right-quote.png" alt="quote">
        </div>
    </section>
@endsection
