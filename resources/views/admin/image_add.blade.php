<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style-starter.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body>
<!-- //breadcrumbs -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product: {{$data->title}}</h3>
                </div>
            </div>
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control input-style">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Add Image</button>
                    </form>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="60" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}"
                                           onclick="return confirm('Record will be deleted! Are you sure?')">
                                            <img src="{{asset("assets/admin/images")}}/remove.png" height="40" width="40"></a></td>
                                </tr>
                                <@endforeach
                            </tbody>
                        </table>
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
</body>
</html>

