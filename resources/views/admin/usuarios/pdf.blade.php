<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/pdf.css">
    <title>Listado de Usuarios</title>
</head>
<body>

<h1>Listado de Regitro de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Actualizacion</th>                        
            </tr>        
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>					
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>           
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>