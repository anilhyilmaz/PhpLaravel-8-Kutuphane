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
                <form action="{{route('admin_reservation_update',['id'=>$data->id])}}" method="post">
                    @csrf
                    <table id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Ad</th>
                            <td>{{$data->user->name}}</td>
                        <tr>
                            <th>Ürün ID</th>
                            <td>{{$data->product_id}}</td>
                        </tr>
                        <tr>
                            <th>Rezervasyon Başlangıç Tarihi</th>
                            <td>{{$data->product_date}}</td>
                        </tr>
                        <tr>
                            <th>Rezervasyon Bitiş Tarihi</th>
                            <td>{{$data->returndate}}</td>
                        </tr>
                        <tr>
                            <th>Toplam Gün</th>
                            <td>{{$data->days}}</td>
                        </tr>
                        <tr>
                            <th>IP</th>
                            <td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Oluşturulma Tarihi</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Güncelleme Tarihi</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Durum</th>
                            <td><select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>accepted</option>
                                    <option>canceled</option>
                                    <option>completed</option>
                                    <option>shipping</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th>Admin Not:</th>
                            <td><textarea name="note" rows="3" cols="30">{{$data->note}}</textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Rezervasyonu Güncelle
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Fotograf</th>
                        <th>Kitap Adı</th>
                        <th>Yazar Adı</th>
                        <th style="" colspan="3">Durumlar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)
                        <form action="{{route('admin_reservation_item_update',['id'=>$rs->id])}}" method="post">
                            @csrf
                            <tr>
                                <td>
                                    @if($rs->product->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->product->image)}}"
                                             height="50" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}">
                                        {{$rs->product->title}}</a>
                                </td>
                                <td>{{$rs->product->yazar_adi}}</td>
                                <td><select name="status">
                                        <option selected>{{$rs->status}}</option>
                                        <option>accepted</option>
                                        <option>canceled</option>
                                        <option>completed</option>
                                        <option>shipping</option>
                                    </select></td>
                                </td>
                                <td><textarea name="note" cols="15">{{$rs->note}}</textarea></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Güncelle
                                    </button>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- main content end-->

