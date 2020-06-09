<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h5>Detalhes Carro {{ $registro->modelo }} </h5>
    <h5>Detalhes Ano: {{ $registro->ano }} </h5>
    <h5>Detalhes Preço {{ $registro->price }} </h5>

    <form action=" {{ route('carro.destroy', $registro->id) }} " method="post">
    @csrf
    @method('DELETE')
        <input type="submit" value="Apagar">
    </form>


    <a href=" {{ route('carro.index') }} ">Voltar Carros</a>

</body>
</html>
