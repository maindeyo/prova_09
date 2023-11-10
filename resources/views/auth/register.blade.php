<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Registrar Usuário</h1>

    <form action="{{url('/register/store')}}" method="POST">
        @csrf
        <label for="email">email</label>
        <input type="text" name="email">
        <label for="name">Nome</label>
        <input type="text" name="name">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
        <button>Enviar</button>
    </form>
    
</body>
</html>