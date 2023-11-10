
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Automoveis</title>
</head>
<body>
    @foreach($automoveis as $automovel)
        <p> Modelo: {{$automovel->modelo}} </p>
        <p> Ano: {{$automovel->ano}} </p>
        <p> Fabricante: {{$automovel->fabricante}}<p>
        <p> Quilometragem: {{$automovel->quilometragem}} </p>
        <p> User: {{$automovel->user_id}} </p>
        <p> User: {{$automovel->id}} </p>


        <a href="{{ route('automoveis.delete', $automovel->id) }}" class="btn btn-danger">Deletar</a>

    @endforeach


</body>
</html>