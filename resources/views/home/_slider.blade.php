<section class="slider">
    <div class="container">
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($slider as $rs)
            <div class="item">
                <div class="slide">
                    <img src="{{Storage::url($rs->image)}}" style="height:650px" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h5>{{$rs->yazar_adi}}</h5>
                            <h3>{{$rs->title}}</h3>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn">shop books</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
