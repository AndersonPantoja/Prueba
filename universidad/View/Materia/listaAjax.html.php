<?php              
    if(!empty($materia)){
        foreach ($materia as $materias) 
        {
            echo"<tr>";
                echo"<td>".$materias['id_materia']."</td>";
                echo"<td>".$materias['nombre']."</td>";                                
                echo"<td><a href='index.php?modulo=Materia&controlador=materia&funcion=getEditar&id_materia=".$materias['id_materia']."'><button class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></button></a></td>";
                echo"<td><a href=\"javascript:myFunction('".$materias['id_materia']."')\"><button data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";
                /*echo"<td><button type='button' data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";*/
            echo"</tr>";      
        }
    } else{
        echo "<center> no hay registros </center>";
    }
?>