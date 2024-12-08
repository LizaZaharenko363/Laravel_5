<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Page')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
</head>
<body>
<div class="navigation">
    <nav class="nav-bar">
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a> 
            <a href="{{ route('about') }}">About</a> 
            <a href="{{ route('contact') }}">Contacts</a> 
            <a href="{{ route('shop') }}">Shop</a> 
            <a href="{{ route('cart') }}">Cart</a>
        </div>
        <form action="{{ route('product.search') }}" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Search products..." value="{{ old('query', $query ?? '') }}">
            <button type="submit">Search</button>
        </form>

    </nav>
</div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>