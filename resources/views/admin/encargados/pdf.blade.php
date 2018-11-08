<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/pdf.css">
    <title>Listado de Encargados</title>
</head>
<body>

<h1>Listado de Regitro de Encargados</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre y Apellido</th>                
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>Direccion</th>          
                <th>Telefono</th>    
                <th>DPI</th>                                                
            </tr>        
        </thead>
        <tbody>
            @foreach($encargados as $emp)
                <tr>
                    <td>{{$emp->p_nombre}} {{$emp->p_apellido}}</td>                    
                    <td>{{$emp->genero}}</td>
                    <td>{{$emp->fecha_nac}}</td>
                    <td>{{$emp->direccion}}</td>
                    <td>{{$emp->telefono}}</td> 
                    <td>{{$emp->cui}}</td>                 					                                                                      
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>