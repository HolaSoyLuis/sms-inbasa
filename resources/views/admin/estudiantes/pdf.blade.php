<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/pdf.css">
    <title>Listado de Estudiantes</title>
</head>
<body>

<h1>Listado de Regitro de Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombres y Apellidos</th>                
                <th>Codigo</th>
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>Direccion</th>                          
                <th>Fecha de Actualizacion</th>                                        
            </tr>        
        </thead>
        <tbody>
            @foreach($estudiantes as $emp)
                <tr>
                    <td>{{$emp->p_nombre}} {{$emp->s_nombre}} {{$emp->p_apellido}} {{$emp->s_apellido}}</td>                    
                    <td>{{$emp->codigo}}</td>
                    <td>{{$emp->genero}}</td>
                    <td>{{$emp->fecha_nac}}</td>
                    <td>{{$emp->direccion}}</td>                 					                                       
                    <td>{{$emp->updated_at}}</td>           
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>