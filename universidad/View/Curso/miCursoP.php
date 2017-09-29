<div id="page-wrapper">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-6">
            <h1 class="page-header">Mis cursos</h1>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 form-group ">
        <label>Buscar</label>
        <input class="form-control" name="buscar" id='buscar' data-url='<?php echo getUrl("Curso", "curso", "fitroAjaxP", false, true)?>'>
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
                            $i=0;
                            foreach ($curso as $cursos) 
                            {
                                echo"<tr>";
                                    echo"<td>".$cursos['id_curso']."</td>";
                                    echo"<td>".$cursos['materia']."</td>";
                                    echo"<td>".$cursos['cupos']."</td>";
                                    echo"<td>".$cursos['hora_inicio']."</td>";
                                    echo"<td>".$cursos['hora_fin']."</td>";
                                    echo"<td>".$cursos['dia']."</td>";                               
                                    echo"<td><div onclick='getIns(".$i.",".$cursos['id_curso'].")' class='btn btn-round btn-success'><i class='glyphicon glyphicon-eye-open'></i></div></td>";
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
//bootbox.alert("This is the default alert!");
function myFunction(id) {
    $('#aceptar').attr('href', 'index.php?modulo=Curso&controlador=curso&funcion=postEliminar&id_curso='+id);
    $('#myModal').modal('show');
}

function getIns(i, id){
    $('#titulo').text("ESTUDIANTES DEL CURSO "+id);
    $.ajax({
        url:"ajax.php?modulo=Curso&controlador=curso&funcion=getEstudiante",
        data:"id="+id,
        type:"POST",
        success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó

            $("#body").html(dato); //la información encontrada se pinta en el div
        }
    });
    $('#myModal1').modal('show');
}

//myFunction();
</script>