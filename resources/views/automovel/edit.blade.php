<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edite um Automóvel</h1>

    <form action="/automovel/save" method="POST">
        @csrf
        @method('PUT')
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo">
        <label for="ano">Ano</label>
        <input type="text" name="ano">
        <label for="fabricantes">Fabricante</label>
        <input type="text" name="fabricantes">
        <label for="quilometragem">Quilometragem</label>
        <input type="text" name="quilometragem">
        <button>Enviar</button>
    </form>
    
</body>
</html>