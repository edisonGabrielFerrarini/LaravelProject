<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Carros</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ano</th>
                <th>Price</th>
                <th>Detalhes</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registro as $item)
                <tr>
                    <td> {{ $item->modelo }} </td>
                    <td> {{ $item->ano }} </td>
                    <td> {{ $item->price }} </td>
                    <td>
                        <a href=" {{ route('carro.show', $item->id) }} ">
                            Detalhes
                        </a>
                    </td>
                    <td>
                        <a href=" {{ route('carro.edit', $item->id) }} ">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a href=" {{ route('carro.create') }} ">Cadastrar Carros</a>
    </div>


</body>
</html>
