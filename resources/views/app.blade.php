<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title','Sistema')</title>

    {{-- Se pueden apilar tbn estilos CSS, que se envían con @push y @endpush luego en otra vista!!   --}}
    @stack('css')

</head>
<body>
    <header>
        <h1> Bienvenido al inicio</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
    
</body>
</html>