@extends('layouts.home')

@section('title','Sıkça Sorulan Sorular')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
@section('content')
    <div id="breadcumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home / </a></li>
                <li><a href="#">Sıkça Sorulan Sorular</a></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                    <div id="accordion">
                        @foreach($datalist as $rs)
                            <h3>{{$rs->question}}</h3>
                            <div>
                                <p>{!! $rs->answer !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
@endsection
