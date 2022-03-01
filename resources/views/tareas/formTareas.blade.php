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
    <!-- Errores -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @isset($tarea)            
        <form action="/tarea/{{ $tarea->id }}" method="POST"> <!-- Editar -->
        @method('PATCH')
    @else
        <form action="/tarea" method="POST"> <!-- Crear -->               
    @endisset     
            @csrf <!-- Seguridad Token -->        
            <label for="tarea"> Nombre: </label>
            <input type="text" name="tarea" value="{{ isset($tarea) ? $tarea->tarea : '' }} {{ old('tarea') }}">
            <br>
            <label for="descripcion">Descripción: </label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10">
                {{ isset($tarea) ? $tarea->descripcion : '' }} {{ old('descripcion') }}
            </textarea>
            <br>
            <label for="categoria">Categoría: </label>
            <select name="categoria" id="categoria">
                <option value="Escuela" {{ isset($tarea) && $tarea->categoria == 'Escuela' ? 'selected' : '' }}> Escuela</option>
                <option value="Trabajo" {{ isset($tarea) && $tarea->categoria == 'Trabajo' ? 'selected' : '' }}>Trabajo</option>   
                <option value="Otra" {{ isset($tarea) && $tarea->categoria == 'Otra' ? 'selected' : '' }}> Otra </option>        
            </select>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>