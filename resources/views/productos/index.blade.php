<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Productos</h1>

        
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-4">Crear Producto</a>

        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

  
        <ul class="list-group">
            @foreach ($productos as $producto)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $producto->nombre }} - ${{ $producto->precio }}
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                </li>
            @endforeach
        </ul>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

