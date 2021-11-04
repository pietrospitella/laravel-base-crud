@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title mt-4 mb-4">
                    <h1>{{$comic['title']}}</h1>
                </div>
                <div class="image mt-2 mb-2">
                    <img src="{{asset($comic['thumb'])}}" alt="">
                </div>
                <div class="descript mt-4 mb-4">
                    <p>{{$comic['description']}}</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection