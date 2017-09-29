<div id="page-wrapper">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-6">
            <h1 class="page-header">Mis cursos</h1>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 form-group ">
        <label>Buscar</label>
        <input class="form-control" name="buscar" id='buscar' data-url='<?php echo getUrl("Curso", "curso", "fitroAjaxE", false, true)?>'>
        </div> 
        <div class="form-group col-md-11 col-sm-11 col-xs-11">
            <h3 id="mensaje"></h3>
        </div>
        <!-- /.col-lg-12 -->
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
                    </tr>
                </thead>
                <tbody id='listar'>
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
                                echo"</tr>";
                                $i++;      
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
    include_once('../../View/Modales/estudianteModal.php');
    ?>
<script>

</script>