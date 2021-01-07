@extends('layouts.admin')
@section('title','Admin Panel Home Page')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
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
                    <form action="{{route('admin_product_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="custom-select input-style" name="category_id">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
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
                            <label>Category ID</label>
                            <input type="integer" name="category_id" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>User ID</label>
                            <input type="integer" name="user_id" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="integer" name="quantity" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Min Quantity</label>
                            <input type="integer" name="minquantity" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Kitap Basım Tarihi</label>
                            <input type="integer" name="kitap_id" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Yazar Adı</label>
                            <input type="text" name="kitap_odunc_alma_tarihi" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Kitap ID</label>
                            <input type="integer" name="kitap_id" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="summernote" name="detail"></textarea>
                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Hello Bootstrap 4',
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>
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
                        <button type="submit" class="btn btn-primary btn-style mt-4">Add Product</button>
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

