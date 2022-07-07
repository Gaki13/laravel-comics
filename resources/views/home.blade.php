@extends('layouts.base')

@section('page-title')
    DC Comics
@endsection

@section('page-content')
<div class="container">
        <ul class="comics-list">
            @foreach ($comics as $comic)
                <li class="card">
                        <img src="{{$comic["thumb"]}}" alt="copertina del comics">
                        <h3>{{$comic["title"]}}</h3>
                </li>
            @endforeach
        </ul>
       
    <button class="main-btn"><h3>LOAD MORE</h3></button>   
</div>
@endsection