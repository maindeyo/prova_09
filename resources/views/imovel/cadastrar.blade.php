<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Cadastre um Imóvel</h1>

    <form action='/imovel/save' method="POST">
        @csrf
        <label for="local">Localização</label>
        <input type="text" name="local">
        <label for="valor">Valor</label>
        <input type="text" name="valor">
        <label for="nquartos">Número de quartos</label>
        <input type="text" name="nquartos">
        <label for="piscina">Tem piscina?</label>
        <select name="piscina">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
        <button>Enviar</button>
    </form>

    
</body>
</html>