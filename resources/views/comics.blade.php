@extends('layouts.app')
@section('title')
    comics
@endsection
@section('content')
<div class="container">
    <div class="comic-container row">
        @foreach ($comics as $item)
        <div class="col-2">
            <figure>
                <img class="comics-img" src="{{$item['thumb']}}" alt="">
            </figure>
            <h6>{{strtoupper($item['series'])}}</h3>
        </div>
        @endforeach
    </div>
    <div class="btn-cont d-flex justify-content-center">
        <button type="button" class="btn btn-primary ps-4 pe-4">LOAD MORE</button>
    </div>
    
</div>
@endsection