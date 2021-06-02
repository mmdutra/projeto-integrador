<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https:///cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ app('url')->asset('css/main.css') }}">
    @yield('styles')
</head>

<body>
    <header>
        <img src="{{ app('url')->asset('images/logo_unileste.png') }}" alt="Logo Unileste">
        <h1>Clínica de Fisioterapia</h1>
    </header>
    <main class="container-fluid">
        @yield('content')
        <script type="text/javascript" src="{{ app('url')->asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
        @stack('scripts')
    </main>
    <footer>
        <img src="{{ app('url')->asset('images/logo_unileste.png') }}" alt="Logo Unileste">
    </footer>
</body>

</html>