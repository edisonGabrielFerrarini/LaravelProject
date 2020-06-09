<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->all())

        @foreach ($errors->all() as $item)
            <li> {{ $item }} </li>
        @endforeach

    @endif

    <form action=" {{ route('carro.update', $registro->id) }} " method="post">
    @csrf
    @method("PUT")
        <div>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" value=" {{ $registro->modelo }} ">
        </div>
        <div>
            <label for="ano">Ano</label>
            <input type="text" step="any" name="ano" id="ano" value=" {{ $registro->ano }} ">
        </div>
        <div>
            <label for="price">Preço</label>
            <input type="text" step="any" name="price" id="price" value=" {{ $registro->price }} " placeholder="Preço">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>



</body>
</html>
