@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','User Profile')


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
                                <th>ID</th>
                                <th>Ürün</th>
                                <th>Konu</th>
                                <th>Gözden Geçirme</th>
                                <th>Puan</th>
                                <th>Durum</th>
                                <th>Tarih</th>
                                <th style="" colspan="3">Durumlar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}" target="_blank">
                                            {{$rs->product->title}}</a>
                                    </td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>




        </div>
    </div>

@endsection
