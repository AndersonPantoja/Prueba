<?php 
    $i=0;
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
                echo"<td><div onclick='getIns(".$i.",".$cursos['id_curso'].")' class='btn btn-primary'>Inscribirse</div></td>";
            echo"</tr>";
            $i++;      
        }
    } else{
        echo "<center> no hay registros </center>";
    }
?>