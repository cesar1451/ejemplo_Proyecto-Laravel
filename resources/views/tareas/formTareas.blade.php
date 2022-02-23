<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tareas</title>
</head>
<body>
    <h1>Agregar Tarea</h1>
    <form action="{{ route('tarea.store')}}" method="POST">
        @csrf <!-- Seguridad Token -->        
        <label for="tarea"> Nombre: </label>
        <input type="text" name="tarea">
        <br>
        <label for="descripcion">Descripción: </label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        <br>
        <label for="categoria">Categoría: </label>
        <select name="categoria" id="categoria">
            <option value="Escuela">Escuela</option>
            <option value="Trabajo">Trabajo</option>            
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>