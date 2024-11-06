<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Cool Tech</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/search">Search</a>
            <a href="/legal">Legal</a>
        </nav>
    </header>

    @include('components.cookie-notice')

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Cool Tech. All rights reserved.</p>
        <a href="/search">Search</a> | 
        <a href="/legal">Legal</a>
    </footer>
</body>
<footer style="text-align: center; margin-top: 20px; padding: 10px; background-color: #f8f9fa;">
    <p>&copy; {{ date('Y') }} Cool Tech. All rights reserved.</p>
    <a href="/search">Search</a> | 
    <a href="/legal">Legal</a>
</footer>

</html>
