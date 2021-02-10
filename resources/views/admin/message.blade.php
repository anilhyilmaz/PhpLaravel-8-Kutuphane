@extends('layouts.admin')

@section('title','Contact Message List')

@section('content')

    <!-- main content start -->
    <div class="main-content">

        <!-- content -->
        <div class="container-fluid content-top-gap">

            <!-- breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb my-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">İletişim Mesajları</li>
                </ol>
            </nav>
            @include('home.message')
            <!-- //breadcrumbs -->

            <!-- content block style 1-->
            <div class="card card_border p-lg-4 p-3 mb-4">
                <div class="card">
                    <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ad</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Konu</th>
                                        <th>Mesaj</th>
                                        <th>Admin Note</th>
                                        <th>Actions</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->message}}</td>
                                            <td>{{$rs->note}}</td>
                                            <td>{{$rs->status}}</td>


                                            <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800,height=600' )">
                                                    <img src="{{asset("assets/admin/images")}}/edit.png" width="30" height="30"> </a>
                                            </td>

                                            <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset("assets/admin/images")}}/remove.png" height="30" width="30"> </a></td>
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
@section('footer')

    @endsection

