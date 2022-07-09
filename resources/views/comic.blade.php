@extends('layouts.base')

@section('title')
    {{$comic["title"]}}
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
    <div class="top-main">
        <div class="container">
            <div class="main-comic">
            {{-- zona con titolo e annuncio --}}
            <div class="top-main-comic">
                <div class="title-side">
                    <h1 class="title-main">{{$comic["title"]}}</h1>
                    <div class="price">
                        <div class="price-left">
                            <p><span>U.S. Price: </span>{{$comic["price"]}}</p>   <span>AVAILABLE</span>
                        </div>
                        <div class="availability">
                            Check Availability &#9660
                        </div>   
                    </div>
                    <p class="description">{{$comic["description"]}}</p>
                </div>
                <div class="adv-side">
                    <p>ADVERTISEMENT</p>
                    <img src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>
   
    <div class="bottom-main">
        <div class="container">
            {{-- zona specifiche --}}
            <div class="bottom-main-comic">
                <div class="talent">
                    <h2 class="title-btm-main">Talent</h2>
                    <hr>
                    <div class="row">
                            <h4>Art by:</h4> 
                        <div class="row-text">
                            @foreach ($comic['artists'] as $artists)
                                <span><a href="">{{ $artists}}</a>, </span>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                            <h4>Written by:</h4>                        
                        <div class="row-text">
                            @foreach ($comic['writers'] as $writers)
                                <span><a href="">{{ $writers}}</a>, </span>
                            @endforeach
                        </div> 
                    </div>
                    <hr>
                </div>
                <div class="specs">
                    <h2 class="title-btm-main">Specs</h2>
                    <hr>
                    <div class="row" >
                        <h4>Series:</h4>
                         <span class="row-text"><a href="">{{ $comic["series"]}} </a></span>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>U.S. Price:</h4>
                         <span class="row-text">{{ $comic["price"]}} </span>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>On Sale Date:</h4>
                         <span class="row-text">{{ $comic["sale_date"]}} </span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-top')
     {{-- sezione con i link  --}}
   <div class="top-footer-comic">
        <div class="container">
            <ul class="footer-ul-comic" >
                <li><a href="#">Digitals Comics<img  src="{{asset('/img/buy-comics-digital-comics.png')}}" alt=""></a></li>
                <li><a href="#"> DC Mercahndise<img src="{{asset('/img/buy-comics-merchandise.png')}}" alt=""></a></li>
                <li><a href="#">Subscription<img src="{{asset('/img/buy-comics-subscriptions.png')}}" alt=""> </a></li>
                <li><a href="#">Comic Shop Locator<img src="{{asset('/img/buy-comics-shop-locator.png')}}" alt=""> </a></li>
            </ul>
        </div>
    </div> 
@endsection