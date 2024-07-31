<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required>
        <label>Descripción:</label>
        <textarea name="descripcion" required>{{ $producto->descripcion }}</textarea>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
