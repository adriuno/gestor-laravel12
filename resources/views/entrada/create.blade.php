<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Crear entrada</title>
</head>
<body>

    <div class="container">
    <header class="text-center mt-4">
        <h2>Registro de nuevas entradas</h2>
    </header>
    <section class="mt-4">

        {{-- para mostrar mensaje de que se ha creado una nueva entrada ... mediante 1 alert...  --}}
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif


        <form action="{{route('entrada.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" class="form-control" placeholder="Ingrese un título"> 
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" id="tag" value="{{old('tag')}}" class="form-control" placeholder="Determine el tag"> 
                </div>

                <div class="form-group col-12 col-md-6">
                    <label for="contenido">Contenido</label>
                    <input type="text" name="contenido" value="{{old('contenido')}}" id="contenido" class="form-control" placeholder="Añada el contenido"> 
                </div>

                <div class="center">
                    <button type="submit" class="btn btn-primary mt-4">Guardar</button>
                </div>
            </div>
        </form>

        {{-- para mostrar los errores de validación -------- obtenemos todos los errores y los recorremos, mostrándolos en una lista --}}
        @if($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </section>
    </div>
</body>
</html>