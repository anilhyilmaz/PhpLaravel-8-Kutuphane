@extends('layouts.admin')

@section('title','Admin Panel Home Page')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

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
                    <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Position</label>
                            <input type="number" id="position" name="position"value="{{$data->position}}" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" id="question" name="question" value="{{$data->question}}" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                            <script>
                                CKEDITOR.replace('answer');
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select input-style" name="status" required="">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Update Product</button>
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

