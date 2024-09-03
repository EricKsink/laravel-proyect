<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="/guardar-formulario" method="post">
            @csrf      
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre"><br>

            <label for="correo">Correo:</label><br>
            <input type="email" name="correo"><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" cols="30" rows="4" required></textarea><br>

            <input type="submit" value="Enviar">

        </form>
</body>
</html>