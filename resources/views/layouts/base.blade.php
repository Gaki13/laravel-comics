<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'DC Comics')</title>
    {{-- link css  --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- fontawesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    {{-- header --}}
    @include('partials.header')

    {{-- hero  --}}
    @include('partials.hero')
    
    {{-- main  --}}
    <main>
        @yield('page-content')
    </main>
    
    {{-- footer  --}}
    @include('partials.footer')
</body>
</html>