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


            <div class="row">
                <div class="card-body">
                    <form action="{{route('admin_setting_update')}}" method="post">
                        @csrf
                        <div class="col-12 col-sm-12">
                            <div class="card card_border py-2 mb-4">
                                <div class="card card-primary card-tabs">

                                    <div class="card-header p-0 pt-1">

                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-one-general-tab"
                                                   data-toggle="pill" href="#custom-tabs-one-general" role="tab"
                                                   aria-controls="custom-tabs-one-general"
                                                   aria-selected="true">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill"
                                                   href="#custom-tabs-one-smtp" role="tab"
                                                   aria-controls="custom-tabs-one-smtp" aria-selected="false">SMTP
                                                    Email</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill"
                                                   href="#custom-tabs-one-social" role="tab"
                                                   aria-controls="custom-tabs-one-social" aria-selected="false">Social
                                                    Media</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill"
                                                   href="#custom-tabs-one-about" role="tab"
                                                   aria-controls="custom-tabs-one-about" aria-selected="false">About
                                                    Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill"
                                                   href="#custom-tabs-one-contact" role="tab"
                                                   aria-controls="custom-tabs-one-contact" aria-selected="false">Contact
                                                    Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-references-tab"
                                                   data-toggle="pill" href="#custom-tabs-one-references" role="tab"
                                                   aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-general"
                                                 role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                                <input type="hidden" name="id" value="{{$data->id}}"
                                                       class="form-control input-style">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="{{$data->title}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input type="text" name="keywords" value="{{$data->keywords}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" name="description" value="{{$data->description}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <input type="text" name="company" value="{{$data->company}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" value="{{$data->address}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" value="{{$data->phone}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input type="textarea" name="email" value="{{$data->email}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2" name="status"
                                                            style="width: 100%">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-smtp-tab">
                                                <div class="form-group">
                                                    <label>Smtp Server</label>
                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Password</label>
                                                    <input type="password" name="smtppassword"
                                                           value="{{$data->smtppassword}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Port</label>
                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}"
                                                           class="form-control input-style">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-social-tab">
                                                <div class="form-group">
                                                    <label>Fax</label>
                                                    <input type="text" name="fax" value="{{$data->fax}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="textarea" name="facebook" value="{{$data->facebook}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>İnstagram</label>
                                                    <input type="text" name="instagram" value="{{$data->instagram}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" name="twitter" value="{{$data->twitter}}"
                                                           class="form-control input-style">
                                                </div>
                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input type="text" name="youtube" value="{{$data->youtube}}"
                                                           class="form-control input-style">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-about-tab">
                                                <div class="form-group">
                                                    <textarea id="aboutus" value="{{$data->aboutus}}" name="aboutus">{{$data->aboutus}}</textarea>
                                                    <script>
                                                        $('#aboutus').summernote({
                                                            placeholder: '',
                                                            tabsize: 2,
                                                            height: 500
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-contact-tab">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <textarea id="contact" value="{{$data->contact}}" name="contact">{{$data->contact}}</textarea>
                                                    <script>
                                                        $('#contact').summernote({
                                                            placeholder: '',
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-references"
                                                 role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                                <div class="form-group">
                                                    <label>References</label>
                                                    <textarea id="references" value="{{$data->references}}" name="references">{{$data->references}}</textarea>
                                                    <script>
                                                        $('#references').summernote({
                                                            placeholder: '',
                                                            tabsize: 2,
                                                            height: 500
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-style mt-4">Update Setting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //content -->
    </div>
    <!-- main content end-->
@endsection

