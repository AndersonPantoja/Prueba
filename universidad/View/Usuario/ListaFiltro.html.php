 <?php                                                                                              
    foreach ($ciudad as $ciudades) 
    {

        echo"<tr>";
            echo"<td>".$ciudades['Ciu_id']."</td>";
            echo"<td>".$ciudades['Ciu_nombre']."</td>";
            echo"<td>".$ciudades['Depto_nombre']."</td>";                                
            echo"<td><a href='index.php?modulo=Ciudad&controlador=ciudad&funcion=getEditar&ciu_id=".$ciudades['Ciu_id']."'><button class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></button></a></td>";
            echo"<td><a href=\"javascript:myFunction('".$ciudades['Ciu_id']."')\"><button class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";
        echo"</tr>";
                     
    }
?>