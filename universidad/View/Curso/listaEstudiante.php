
    <div class="col-md-10 col-sm-10 col-xs-6">
       <div class="table-responsive">
            <table class="table table-bordered jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody id='listar'>
                    <?php                                                                               //nombre del submodulo    
                        $nombre="Materia";
                        //llenar tabla
                        if(!empty($usuario)){
                            foreach ($usuario as $usuarios) 
                            {
                                echo"<tr>";
                                    echo"<td>".$usuarios['nombre']."</td>";
                                    echo"<td>".$usuarios['cedula']."</td>";
                                    echo"<td>".$usuarios['correo']."</td>";
                                echo"</tr>";      
                            }
                        } else{
                            echo "<center> no hay estudiantes registrados </center>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>