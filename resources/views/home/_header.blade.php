<header>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <a href="{{route('home')}}" class="nav-link">Home</a>
                        </li>

                       @include('home._category')
                        <li class="navbar-item">
                            <a href="{{route('references')}}" class="nav-link">Referanslar</a>
                        </li>
                        <li class="navbar-item">
                            <a href="{{route('aboutus')}}" class="nav-link">Hakkımızda</a>
                        </li>
                        <li class="navbar-item">
                            <a href="{{route('faq')}}" class="nav-link">SSS</a>
                        </li>
                        <li class="navbar-item">
                            <a href="{{route('contact')}}" class="nav-link">İletişim</a>
                        </li>
                        @auth
                            <li class="navbar-item">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 4px">
                                    {{Auth::user()->name}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('myprofile')}}">My profile</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                </div>
                            </div></li>
                        @endauth
                        @guest
                            <li class="navbar-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                        <li class="navbar-item">
                            <a href="/register" class="nav-link">Join</a>
                        </li>
                        @endguest
                    </ul>
                    <div class="cart my-2 my-lg-0">
                        <a href="{{route('user_shopcart')}}">
                            <span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        <span class="quntity">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span></a>
                    </div>
                    <div class="header-search">
                    <form class="form-inline my-2 my-lg-0" action="{{route('getproduct')}}" method="post">
                        @csrf
                        @livewire('search')
{{--                        <button type="submit" class="search-btn"><i class="fa fa-search"></i> </button>--}}
                        <input class="form-control mr-sm-2" type="submit" placeholder="" aria-label="Search">
                        <span class="fa fa-search"></span>
                    </form>
                        @section('footerjs')
                    @livewireScripts
                        @endsection
                </div>
                </div>
            </nav>

        </div>
    </div>
</header>

