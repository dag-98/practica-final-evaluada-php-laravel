<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
/* form { */
/* background-color:lightsteelblue; */
/* width:50%; */
/* display:block; */
/* margin:auto; */
/* } */

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin:auto;
}
    #matriz-estilizada {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #matriz-estilizada td, #tbl th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #matriz-estilizada tr:nth-child(even){background-color: #f2f2f2;}

    #matriz-estilizada tr:hover {background-color: #ddd;}

    #matriz-estilizada th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #427D9D;
      color: white;
    }

    a:link, a:visited {
      background-color: white;
      color: black;
      border: 2px solid green;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 1rem;
      border-radius: 20px;
    }

    a:hover, a:active {
      background-color: green;
      color: white;
    }


    #abort:link, #abort:active, #abort:visited {
      background-color:lightpink;
    }

    #abort:hover{
      background-color:red;
    /* font-size:3rem; */
    }

    #nuevo{ display:none; }

    #show {display:block; margin:auto;}

    h1, h2, h3 {text-align:center;}



</style>
</head>
<h1 style= "text-align:center">Gobierno de El Salvador</h1>
<h2 style= "text-align:center">Secretaría de Innovación</h2>
<h3 style= "text-align:center">{{$fecha}}</h3>

<table style= "text-align:center" id="matriz-estilizada">
<tr>
    <th>ID</th>
    <th>Proyecto</th>
    <th>Fuente</th>
    <th>M.Planificado</th>
    <th>M.Patrocinado</th>
    <th>M.Propios</th>
</tr>
@foreach($proyectos as $proyecto)
<tr>

    <td>{{$proyecto->id}}</td>
    <td>{{$proyecto->NombreProyecto}}</td>
    <td>{{$proyecto->fuenteFondos}}</td>
    <td>${{$proyecto->MontoPlanificado}}</td>
    <td>${{$proyecto->MontoPatrocinado}}</td>
    <td>${{$proyecto->MontoFondosPropios}}</td>

</tr>
@endforeach
</table>

