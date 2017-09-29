<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Usuario</h1>
        </div>
        <div class="form-group col-md-11 col-sm-11 col-xs-11">
            <div id="setClave" class="btn btn-default">Cambiar contraseña</div>
        </div>
        <div class="form-group col-md-11 col-sm-11 col-xs-11">
            <h3 id="exito"></h3>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    
    <!-- /.row -->
    <div class="row">
       <div class="panel panel-default">
            <div class="panel-heading">
                Editar usuario
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-11">
                        <form role="form" class="form-horizontal form-label-left" name="frm_ciudad" method="post" action="<?php echo getUrl("Curso","curso","postEditar"); ?>">
                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="fullname" class="control-label col-md-3 col-sm-3">Cupos<?php foreach ($curso as $cursos) {}?></label>
                                <div class="col-md-8 col-sm-8">
                                    <input type="number" id="cupos" class="form-control" required name="cupos" value="<?php echo $cursos['cupos']; ?>">
                                </div>
                                <input type="hidden" class="form-control" required  placeholder="Nombre" id="id_curso" name="id_curso" value="<?php echo $cursos['id_curso']; ?>"/>
                            </div>
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="number" class="control-label col-md-3 col-sm-3">fecha inicio</label>
                                <div class="date col-md-8 col-sm-8">
                                    <input type="date" id="fini" class="form-control" required  name="fini" value="<?php echo $cursos['fecha_inicio']; ?>">
                                </div>
                            </div>
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="email" class="control-label col-md-3 col-sm-3">fecha fin</label>
                                <div class="date col-md-8 col-sm-8">
                                    <input type="date" id="ffin" class="form-control" required  name="ffin" value="<?php echo $cursos['fecha_fin']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <label class="control-label col-md-3 col-sm-3">Dia</label>
                                <div class="item col-md-8 col-sm-8">
                                    <select class="select2_single form-control" required="required" id="dia" name="dia">
                                    <option value>Seleccione un dia</option>
                                    <?php
                                        foreach ($dia as $dias) 
                                        {
                                            $seleccion="";
                                            if($dias==$cursos['dia'])
                                            {
                                                $seleccion="selected";
                                            }
                                            echo "<option value=" . $dias. " $seleccion>" . $dias. "</option>";                       
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="time" class="control-label col-md-3 col-sm-3">Hora inicio</label>
                                <div class="time col-md-8 col-sm-8">
                                    <input type="time" id="hini" class="form-control" required  name="hini" value="<?php echo $cursos['hora_inicio']; ?>">
                                </div>
                            </div>
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="time" class="control-label col-md-3 col-sm-3">Hora fin</label>
                                <div class="col-md-8 col-sm-8">
                                    <input type="time" id="hfin" class="form-control" required  name="hfin" value="<?php echo $cursos['hora_fin']; ?>">
                                </div>
                            </div>
                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <label class="control-label col-md-3 col-sm-3">Profesor</label>
                                <div class="item col-md-8 col-sm-8">
                                    <select class="select2_single form-control" required="required" id="profesor" name="profesor">
                                        <option value>Seleccione un rol</option>
                                        <?php 
                                        foreach ($usuario as $usuarios) 
                                        {
                                            $seleccion="";
                                            if($usuarios['id_usuario']==$cursos['profesor'])
                                            {
                                                $seleccion="selected";
                                            }
                                            echo "<option value=" . $usuarios['id_usuario']. " $seleccion>" . $usuarios['cedula']." - ".$usuarios['nombre'] ."</option>";                    
                                    }
                                        ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <label class="control-label col-md-3 col-sm-3">Materia</label>
                                <div class="item col-md-8 col-sm-8">
                                    <select class="select2_single form-control" required="required" id="materia" name="materia">
                                        <option value>Seleccione un rol</option>
                                        <?php 
                                        foreach ($materia as $materias) 
                                        {
                                             $seleccion="";
                                            if($materias['id_materia']==$cursos['id_materia'])
                                            {
                                                $seleccion="selected";
                                            }
                                            echo "<option value=" . $materias['id_materia']. " $seleccion>" . $materias['id_materia']."- ".$materias['nombre'] ."</option>";                   
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <button type="submit" class="btn btn-default">Editar</button>
                                <button class="btn btn-default"><a href="<?php echo 
                                getUrl("Usuarios","usuario","listar"); ?>">Cancelar</a></button>
                            </div>
                        </form>
                        
                            <?php
                                include_once('../../View/Modales/cambiarClave.php');
                            ?>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div> 
    </div>
</div>

<script>

    
//myFunction();
</script>