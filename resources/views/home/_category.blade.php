@php
    $parentCategories = (new App\Http\Controllers\HomeController)->categorylist()
@endphp

<li class="navbar-item">
    <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="padding: 4px">
            Categories
        </button>
        <div class="dropdown-menu">
            <ul>
                @foreach($parentCategories as $rs)
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}<i
                                class="fa fa-angle-right"></i> </a>
                        <div class="custom-menu">
                            <div class="row">
                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</li>
