@extends('layouts.base')

@section('title')
    {{$comic['title']}}
@endsection

@section('hero')
    {{-- sezione dell'hero --}}
    <div class="hero">
        <div class="container">
            <div class="img-overlay">
                <p>COMIC BOOK</p>
                <img src="{{$comic["thumb"]}}" alt="copertina del comics">
                <p class="view-gallery">VIEW GALLERY</p>
            </div>    
        </div>
    <div class="hero-divider"></div> 
    </div>
@endsection

@section('page-content')
    <div class="container">
        <div class="main-comic">
            
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
            </ul>
        </div>
    </div> 
@endsection