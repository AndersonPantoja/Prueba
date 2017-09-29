<div id="page-wrapper" class="col-md-12 col-sm-12 col-xs-6">
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-6">
            <h1 class="page-header">Crear Curso</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--c/.row -->
    <div class="row">
       <div class="panel panel-default">
            <div class="panel-heading">
                Nuevo Curso
            </div>
            <div class="panel-body">
                <div class="row x_panel">
                    <div class="col-lg-11 x_title">
                        <form id="demo-form" class="form-horizontal form-label-left" data-parsley-validate role="form" name="departamento" method="post" action="<?php echo getUrl("Curso","curso","postCrear"); ?>">

                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="fullname" class="control-label col-md-3 col-sm-3">Cupos</label>
                                <div class="col-md-8 col-sm-8">
                                    <input type="number" id="cupos" class="form-control" required name="cupos">
                                </div>
                            </div>
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="number" class="control-label col-md-3 col-sm-3">fecha inicio</label>
                                <div class="date col-md-8 col-sm-8">
                                    <input type="date" id="fini" class="form-control" required  name="fini">
                                </div>
                            </div>
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="email" class="control-label col-md-3 col-sm-3">fecha fin</label>
                                <div class="date col-md-8 col-sm-8">
                                    <input type="date" id="ffin" class="form-control" required  name="ffin">
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
                                            echo "<option value=".$dias.">". $dias."</option>";                    
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="time" class="control-label col-md-3 col-sm-3">Hora inicio</label>
                                <div class="time col-md-8 col-sm-8">
                                    <input type="time" id="hini" class="form-control" required  name="hini">
                                </div>
                            </div>
                            <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                <label for="time" class="control-label col-md-3 col-sm-3">Hora fin</label>
                                <div class="col-md-8 col-sm-8">
                                    <input type="time" id="hfin" class="form-control" required  name="hfin">
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
                                            echo "<option value=" . $usuarios['id_usuario']. ">" . $usuarios['cedula']." - ".$usuarios['nombre']."</option>";                    
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
                                            echo "<option value=" . $materias['id_materia']. ">" . $materias['id_materia']."- ".$materias['nombre']. "</option>";                    
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                <button type="submit" class="btn btn-primary">Crear</button>
                                <button type="reset" class="btn btn-default">Limpiar</button>
                                <button class="btn btn-default"><a href="<?php echo 
                                getUrl("Curso","curso","listar"); ?>">Cancelar</a></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div> 
    </div>
           
</div>