<div id="page-wrapper">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-6">
            <h1 class="page-header">Curso</h1>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 form-group ">
        <label>Buscar</label>
        <input class="form-control" name="buscar" id='buscar' data-url='<?php echo getUrl("Curso", "curso", "fitroAjax", false, true)?>'>
        </div> 
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-10">
            <a class="btn btn-primary" href="index.php?modulo=Curso&controlador=curso&funcion=crear">Crear Curso</a>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
       <div class="table-responsive">
            <table class="table table-bordered jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th>Id Curso</th>
                        <th>Materia</th>
                        <th>Profesor</th>
                        <th>Cupos</th>
                        <th>Hora inicio</th>
                        <th>Hora fin</th>
                        <th>Dia</th>
                        <th colspan="3" align='/center/' >Acciones</th>

                    </tr>
                </thead>
                <tbody id='listar'>
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
    $('#aceptar').attr('href', 'index.php?modulo=Curso&controlador=curso&funcion=postEliminar&id_curso='+id);
    $('#myModal').modal('show');
}
//myFunction();
</script>