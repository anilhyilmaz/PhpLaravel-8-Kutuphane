@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','Alışveriş Sepeti')


@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">User Profile</a></li>
            </ul>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div id="main" class="col-md-10">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Fotograf</th>
                            <th>Kitap Adı</th>
                            <th>Yazar Adı</th>
                            <th style="" colspan="3">Durumlar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs)
                            <tr>
                                <td class="thumb">
                                    @if($rs->product->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->product->image)}}" height="45"
                                             alt="">
                                    @endif
                                </td>
                                <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}">{{$rs->product->title}}</a></td>
                                <td>{{$rs->product->yazar_adi}}</td>
                                <td>
                                    <a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}"
                                       onclick="return confirm('Delete! Are you sure?')"><img
                                            src="{{asset('assets/admin/images')}}/remove.png" style="height: 25px"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        <button type="submit" class="btn">Ödünç Almayı Onayla</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>
    </div>

@endsection
