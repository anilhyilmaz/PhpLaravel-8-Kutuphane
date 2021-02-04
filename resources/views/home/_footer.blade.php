@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address">
                    <h4>Our Address</h4>
                    <h6>{{$setting->address}}</h6>
                    <h6>Call : {{$setting->phone}}</h6>
                    <h6>Email : {{$setting->email}}</h6>
                </div>
                <div class="timing">
                    <h4>Timing</h4>
                    <h6>Mon - Fri: 7am - 10pm</h6>
                    <h6>​​Saturday: 8am - 10pm</h6>
                    <h6>​Sunday: 8am - 11pm</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="navigation">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-conditions.html">Terms</a></li>
                        <li><a href="products.html">Products</a></li>
                    </ul>
                </div>
                <div class="navigation">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="">Shipping & Returns</a></li>
                        <li><a href="privacy-policy.html">Privacy</a></li>
                        <li><a href="faq.html">FAQ’s</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form">
                    <h3>Quick Contact us</h3>
                    <h6>We are now offering some good discount
                        on selected books go and shop them</h6>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Messege"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn black">Alright, Submit</button>
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
