
<!DOCTYPE html>

<html>
    <head>
        <title> Laravel 10  Task List </title>
        @yield('styles')
    </head>

    <body>
        <h1>@yield('title')</h1>
        @if(session()->has('success'))
        <div>{{session('succes')}}</div>

        @endif

        <div>
            @yield('content')
        </div>

    </body>
</html>
