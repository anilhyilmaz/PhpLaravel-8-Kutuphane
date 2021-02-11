@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address">
                    <h4>Adres</h4>
                    <h6>{{$setting->address}}</h6>
                    <h6>Call : {{$setting->phone}}</h6>
                    <h6>Email : {{$setting->email}}</h6>
                </div>
                <div class="timing">
                    <h4>Zaman</h4>
                    <h6>Pazartesi-Cuma: 09:00-17:00</h6>
                    <h6>Cumartesi:11:00-15:00</h6>
                    <h6>Pazar: Kapalı</h6>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form ">
                    <h3>Hızlı İletişim</h3>
                    <form id="checkout_form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input placeholder="Name" type="text" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" type="text" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Messege" name="message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn black">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>(C) 2020. All Rights Reserved.</h5>
                </div>
                <div class="col-md-6">
                    <div class="share align-middle">
                        @if($setting->facebook !=null)<span class="fb"><a href='{{$setting->facebook}}' target="_blank"><i class="fa fa-facebook-official"></i></a> </span>@endif
                        @if($setting->instagram !=null)<span class="fb"><a href='{{$setting->instagram}}' target="_blank"><span class="instagram"><i class="fa fa-instagram"></i></span>@endif
                        @if($setting->twitter !=null)<span class="fb"><a href='{{$setting->twitter}}' target="_blank"><span class="twitter"><i class="fa fa-twitter"></i></span>@endif
                        @if($setting->youtube !=null)<span class="fb"><a href='{{$setting->youtube}}' target="_blank"><span class="youtube"><i class="fa fa-youtube"></i></span>@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
