<?php
                                                                                                   
    if(!empty($usuario)){
        foreach ($usuario as $usuarios) 
        {
            echo"<tr>";
                echo"<td>".$usuarios['descripcion']."</td>";
                echo"<td>".$usuarios['nombre']."</td>";
                echo"<td>".$usuarios['cedula']."</td>";
                echo"<td>".$usuarios['correo']."</td>";                                
                echo"<td><a href='index.php?modulo=Usuario&controlador=usuario&funcion=getEditar&id_usuario=".$usuarios['id_usuario']."'><button class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></button></a></td>";
                echo"<td><a href=\"javascript:myFunction('".$usuarios['id_usuario']."')\"><button data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";
                /*echo"<td><button type='button' data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";*/
            echo"</tr>";      
        }
    } else{
        echo "<center> no hay registros </center>";
    }
    ?>