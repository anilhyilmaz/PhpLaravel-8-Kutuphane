@extends('layouts.admin')

@section('title','Admin Rezervasyon Listesi')

@section('content')

    <!-- main content start -->
    <div class="main-content">

        <!-- content -->
        <div class="container-fluid content-top-gap">

            <!-- breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb my-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rezervasyonlar</li>
                </ol>
            </nav>
            <!-- //breadcrumbs -->

            <!-- content block style 1-->
            <div class="card card_border p-lg-4 p-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kullanıcı</th>
                                <th>Ürün ID</th>
                                <th>Rezervasyon Başlangıç</th>
                                <th>Rezervasyon Bitiş</th>
                                <th>Toplam Gün</th>
                                <th>IP</th>
                                <th>Durum</th>
                                <th>Not</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                           onclick="return !window.open(this.href, '', 'top=50 left=100 width=800,height=600' )">
                                            {{$rs->user->name}}</a></td>
                                    <td>{{$rs->product_id}}</td>
                                    <td>{{$rs->product_date}}</td>
                                    <td>{{$rs->returndate}}</td>
                                    <td>{{$rs->days}}</td>
                                    <td>{{$rs->IP}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td><a href="{{route('admin_reservation_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=10 left=100 width=1100,height=600' )">
                                            <img src="{{asset("assets/admin/images")}}/edit.png" width="30" height="30"></a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- //content block style 1-->

            <!-- content block style 1-->
            <div class="card card_border p-lg-4 p-3 mb-4">
                <div class="card-body py-3 p-0">
                    <div class="row">
                        <div class="col-lg-6 align-self pr-lg-4">
                            <h6>Footer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //content block style 1-->


        </div>
        <!-- //content -->

    </div>
    <!-- main content end-->
@endsection

