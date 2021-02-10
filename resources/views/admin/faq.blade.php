@extends('layouts.admin')

@section('title','Sıkça Sorulan Sorular Listesi')

@section('content')

    <!-- main content start -->
    <div class="main-content">

        <!-- content -->
        <div class="container-fluid content-top-gap">

            <!-- breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb my-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sıkça Sorulan Sorular</li>
                </ol>
                <a href="{{route('admin_faq_add')}}" type="submit" class="btn btn-primary btn-style mt-4"  style="height: 40px">SSS Ekle</a>
                @include('home.message')
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
                                        <th>Position</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->position}}</td>
                                            <td>{{$rs->question}}</td>
                                            <td>{!! $rs->answer !!}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><img src="{{asset("assets/admin/images")}}/edit.png" height="30" width="30"></a></td>
                                            <td><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset("assets/admin/images")}}/remove.png" height="30" width="30"> </a></td>
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

