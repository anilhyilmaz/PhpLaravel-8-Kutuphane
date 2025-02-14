@auth
    <div class="aside">
        <h3 class="aside-title">User Panel</h3>
        <ul class="list-links">
            <li><a href="{{route('myprofile')}}">Kullanıcı Profili</a></li>
            <li><a href="{{route('user_reservations')}}">Siparişlerim</a></li>
            <li><a href="{{route('myreviews')}}">Yorumlar</a></li>
            <li><a href="{{route('user_shopcart')}}">Sepet</a></li>
            <li><a href="{{route('logout')}}">Çıkış</a></li>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
            <li><a href="{{route('adminhome')}}">Admin Panel</a></li>
            @endif
        </ul>
    </div>
@endauth
