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

<h1>Listado de Regitro de Empleados</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de Nacimiento</th>
                <th>Direccion</th>
                <th>DPI</th>                            
                <th>Inicio de Labores</th>
                <th>Telefono</th>
                <th>Fecha de Actualizacion</th>                                        
            </tr>        
        </thead>
        <tbody>
            @foreach($empleados as $emp)
                <tr>
                    <td>{{$emp->p_nombre}}</td>
                    <td>{{$emp->p_apellido}}</td>
                    <td>{{$emp->genero}}</td>
                    <td>{{$emp->fecha_nac}}</td>
                    <td>{{$emp->lugar_nac}}</td>
                    <td>{{$emp->direccion}}</td>
                    <td>{{$emp->cui}}</td>
                    <td>{{$emp->inicio_labores}}</td> 
                    <td>{{$emp->telefono}}</td>                    					                                       
                    <td>{{$emp->updated_at}}</td>           
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>