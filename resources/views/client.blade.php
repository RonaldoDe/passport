<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <h1>OAuth clients</h1>
    <form action="{{url('oauth/clients')}}" method="POST">
        <p>
            <input type="text" name="name" placeholder="Nombre">
        </p>
        <p>
            <input type="text" name="redirect" placeholder="URL de redireccion">
        </p>
        <p>
            <input type="submit" name="send" value="Enviar">
        </p>
        {{ csrf_field() }}
    </form>

    <table border="1">
        <tbody>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Redirect</td>
                <td>Secret</td>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->redirect}}</td>
                    <td>{{$client->secret}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Personal Acces tokens</h2>
    <form action="{{url('/oauth/personal-access-tokens')}}" method="POST">
        <input type="text" name="name" placeholder="Nombre">
        <input type="submit" value="Crear">
        {{ csrf_field() }}
    </form>
</body>
</html>