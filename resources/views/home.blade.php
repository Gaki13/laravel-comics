@extends('layouts.base')

@section('title')
    DC Comics
@endsection

@section('hero')
    {{-- sezione dell'hero --}}
    <div class="hero">
        <div class="container">
            <h2>CURRENT SERIES</h2>
        </div>
    </div>
@endsection

@section('page-content')
{{-- sezione con le serie --}}
<div class="main-home">
    <div class="container">
        <ul class="comics-list">
            @foreach ($comics as $id => $comic )
                <li class="card">
                    <a href="{{ route('comic', ["id" => $id]) }}">
                        <img src="{{$comic["thumb"]}}" alt="copertina del comics">
                        <h3>{{$comic["title"]}}</h3>
                    </a>
                </li>
            @endforeach
        </ul> 
        <button class="main-btn"><h3>LOAD MORE</h3></button>    
    </div>
</div>
  
@endsection

@section('footer-top')
    {{-- sezione con i link  --}}
   <div class="top-footer">
        <div class="container-small">
            <ul class="footer-ul" >
                <li><a href="#"><img src="{{asset('/img/buy-comics-digital-comics.png')}}" alt="">Digitals Comics</a></li>
                <li><a href="#"><img src="{{asset('/img/buy-comics-merchandise.png')}}" alt=""> DC Mercahndise</a></li>
                <li><a href="#"><img src="{{asset('/img/buy-comics-subscriptions.png')}}" alt=""> Subscription</a></li>
                <li><a href="#"><img src="{{asset('/img/buy-comics-shop-locator.png')}}" alt=""> Comic Shop Locator</a></li>
                <li><a href="#"><img src="{{asset('/img/buy-dc-power-visa.svg')}}" alt=""> DC Power Visa</a></li>
            </ul>
        </div>
    </div> 
     
@endsection