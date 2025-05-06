<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB Irvan</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengelolaan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

</head>
<body>
    @include('components.navbar')

    <main class="content">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
