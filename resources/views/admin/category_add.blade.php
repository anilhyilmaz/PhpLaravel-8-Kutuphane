@extends('layouts.admin')

@section('title','Admin Panel Home Page')

@section('content')

    <!-- main content start -->
    <div class="main-content">

        <!-- content -->
        <div class="container-fluid content-top-gap">

            <!-- breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb my-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Content Blocks</li>
                </ol>
            </nav>
            <!-- //breadcrumbs -->


            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="{{route('admin_category_create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="custom-select input-style" name="parent_id">
                                <option value="0">Ana Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keyword" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select input-style" name="status" required="">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Add Category</button>
                    </form>
                </div>
            </div>

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

