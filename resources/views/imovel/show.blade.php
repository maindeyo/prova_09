<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @foreach($imoveis as $imovel)
            <p> Local: {{$imovel->localizacao}} </p>
            <p> Valor: {{$imovel->valor}} </p>
            <p> N de quartos: {{$imovel->num_quartos}}<p>
            <p> Piscina: {{$imovel->piscina}} </p>
            <p> User: {{$imovel->user_id}} </p>
            <a href="{{ route('imoveis.delete', $imovel->id) }}" class="btn btn-danger">Deletar</a>

         @endforeach
</body>
</html>