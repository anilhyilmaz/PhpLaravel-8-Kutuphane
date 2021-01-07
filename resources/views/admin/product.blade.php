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
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
                <a href="{{route('admin_product_add')}}" type="submit" class="btn btn-primary btn-style mt-4"  style="height: 40px">Add Product</a>
            </nav>
            <!-- //breadcrumbs -->

            <!-- content block style 1-->
            <div class="card card_border p-lg-4 p-3 mb-4">
                <div class="card-body py-3 p-0">
                    <div class="row">
                        <div class="col-lg-6 align-self pr-lg-4">

                            <div class="col-sm-25">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Quantity</th>
                                        <th>Yazar Adı</th>
                                        <th>kitap_id</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->category_id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->quantity}}</td>
                                            <td>{{$rs->yazar_adi}}</td>
                                            <td>{{$rs->kitap_id}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30" alt="">
                                                    @endif
                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}">Edit</a></td>
                                            <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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

