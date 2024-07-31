<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
