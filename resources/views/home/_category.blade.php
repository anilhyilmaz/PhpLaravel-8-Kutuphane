@php
    $parentCategories = (new App\Http\Controllers\HomeController)->categorylist()
@endphp

<li class="navbar-item">
    <div class="dropdown">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="padding: 4px">
            Categories
        </button>
        <ul>
        <div class="dropdown-menu">
                @foreach($parentCategories as $rs)
                    <li class="dropdown sub-menu-list">
                <a class="dropdown-item">{{$rs->title}}</a>
                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                @endif
                    </li>
                @endforeach
        </div>
        </ul>
    </div>
</li>

