<div id="page-wrapper">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-6">
            <h1 class="page-header">USUARIOS</h1>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 form-group ">
        <label>Buscar</label>
        <input class="form-control" name="buscar" id='buscar' data-url='<?php echo getUrl("Usuario", "usuario", "fitroAjax", false, true)?>'>
        </div> 
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-10">
            <a class="btn btn-primary" href="index.php?modulo=Usuario&controlador=usuario&funcion=crear">Crear Usuario</a>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
       <div class="table-responsive">
            <table class="table table-bordered jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th>Rol</th>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Correo</th>
                        <th colspan="3" align='/center/' >Acciones</th>

                    </tr>
                </thead>
                <tbody id='listar'>
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
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include_once('../../View/Modales/eliminar.php');
    ?>
<script>
//bootbox.alert("This is the default alert!");
function myFunction(id) {
    $('#aceptar').attr('href', 'index.php?modulo=Usuario&controlador=usuario&funcion=postEliminar&id_usuario='+id);
    $('#myModal').modal('show');
}
//myFunction();
</script>