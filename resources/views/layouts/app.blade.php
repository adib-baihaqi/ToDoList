<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/list.css')}}" rel="stylesheet">
        <script src="{{asset('js/todolist.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <header>
        @include('layouts.navbar')
    </header>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>