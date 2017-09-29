
<?php                  
//llenar tabla
if(!empty($curso)){
    foreach ($curso as $cursos) 
    {
        echo"<tr>";
            echo"<td>".$cursos['id_curso']."</td>";
            echo"<td>".$cursos['materia']."</td>";
            echo"<td>".$cursos['profesor']."</td>";
            echo"<td>".$cursos['cupos']."</td>";
            echo"<td>".$cursos['hora_inicio']."</td>";
            echo"<td>".$cursos['hora_fin']."</td>";
            echo"<td>".$cursos['dia']."</td>";                               
            echo"<td><a href='index.php?modulo=Curso&controlador=curso&funcion=getEditar&id_curso=".$cursos['id_curso']."'><button class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></button></a></td>";
            echo"<td><a href=\"javascript:myFunction('".$cursos['id_curso']."')\"><button data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";
            /*echo"<td><button type='button' data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";*/
        echo"</tr>";      
    }
} else{
    echo "<center> no hay registros </center>";
}

                                      