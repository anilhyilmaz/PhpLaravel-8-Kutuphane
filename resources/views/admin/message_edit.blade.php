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
                <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post">
                    @csrf


                    <table id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th><td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Ad</th><td>{{$data->name}}</td>
                        <tr>
                            <th>Email</th><td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Telefon</th><td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Konu</th><td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Mesaj</th><td>{{$data->message}}</td>
                        </tr>
                        <tr>
                            <th>Admin Note</th><td>
                                <textarea id="note" name="note">{{$data->note}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><td><td>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Update Message</button>
                                </div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- main content end-->

