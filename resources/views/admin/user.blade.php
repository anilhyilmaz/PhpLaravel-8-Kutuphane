@extends('layouts.admin')

@section('title','Product List')

@section('content')

    <!-- main content start -->
    <div class="main-content">

        <!-- content -->
        <div class="container-fluid content-top-gap">

            <!-- breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb my-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kullanıcılar</li>
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
                                        <th>Id</th>
                                        <th>Fotograf</th>
                                        <th>Ad</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Adres</th>
                                        <th>Roller</th>
                                        <th>Durumlar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                @if($rs->profile_photo_path)
                                                    <img
                                                        src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}"
                                                        height="50" width="50"
                                                        style="border-radius: 10px" alt="">
                                                @endif
                                            </td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->address}}</td>
                                            <td>@foreach($rs->roles as $row)
                                            {{$row->name}},
                                            @endforeach
                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}"
                                               onclick="return !window.open(this.href, '' ,'top=100 left=300 width=800,height=600')">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            </td>


                                            <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><img
                                                        src="{{asset("assets/admin/images")}}/edit.png" style="height: 25px"></a></td>
                                            <td><a href="{{route('admin_user_delete',['id'=>$rs->id])}}"
                                                   onclick="return confirm('Delete! Are you sure?')"><img
                                                        src="{{asset("assets/admin/images")}}/remove.png" height="30"
                                                        width="30"> </a></td>
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
@section('footer')

@endsection

