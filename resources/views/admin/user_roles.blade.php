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
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    @include('home.message')
                    <tr>
                        <th>Id</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th>Ad</th>
                        <td>{{$data->name}}</td>
                    <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Roller</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                               onclick="return confirm('Delete! Are you sure?')">
                                                <img src="{{asset("assets/admin/images")}}/remove.png" height="30"
                                                     width="30"> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <th>Rol Ekle</th>
                                        <td>
                                            <form action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <select name="roleid">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary">Rol Ekle</button>
                                            </form>
                                        </td>
                                    </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- main content end-->

