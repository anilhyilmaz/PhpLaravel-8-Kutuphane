@foreach($children as $subcategory)
    <ul class="list">
        @if(count($subcategory->children))
            <li style="color: #1D00AF;font-family: 'Arial Black'">{{$subcategory->title}}</li>
            <ul class="list">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
        @else
        <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
            @endif
    </ul>
@endforeach
