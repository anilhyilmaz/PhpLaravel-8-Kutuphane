<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/styles.css">



<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">


        <div class="card card_border py-2 mb-4">
            @include('home.message')
            <div class="card-body">
                <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post">
                    @csrf
                    <table id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th><td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Ad</th><td>{{$data->user->name}}</td>
                        <tr>
                            <th>Ürün</th><td>{{$data->product->title}}</td>
                        </tr>
                        <tr>
                            <th>Konu</th><td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Konu</th><td>{{$data->review}}</td>
                        </tr>
                        <tr>
                            <th>Puan</th><td>{{$data->rate}}</td>
                        </tr>
                        <tr>
                            <th>IP</th><td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Oluşturulma Tarihi</th><td>{{$data->create_at}}</td>
                        </tr>
                        <tr>
                            <th>Güncelleme Tarihi</th><td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Durum</th>
                            <td><select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><td><td>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Update Review</button>
                                </div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- main content end-->

