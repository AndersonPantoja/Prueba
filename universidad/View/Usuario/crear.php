<div id="page-wrapper" class="col-md-12 col-sm-12 col-xs-6">
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-6">
            <h1 class="page-header">Crear Materia</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--c/.row -->
    <div class="row">
       <div class="panel panel-default">
                <div class="panel-heading">
                    Nueva Materia
                </div>
                <div class="panel-body">
                    <div class="row x_panel">
                        <div class="col-lg-11 x_title">
                            <form id="demo-form" class="form-horizontal form-label-left" data-parsley-validate role="form" name="departamento" method="post" action="<?php echo getUrl("Usuario","usuario","postCrear"); ?>">
<!-- 
                                <div class="form-group">
                                    <label>Id Ciudad</label>
                                    <input class="form-control" name="ciu_id" type="number">
                                </div>
-->                                        
                                <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="fullname" class="control-label col-md-3 col-sm-3">Nombre de usuario</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input type="text" id="fullname" class="form-control" required  placeholder="Nombre" name="nombre">
                                    </div>
                                </div>
                                <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="number" class="control-label col-md-3 col-sm-3">Cedula</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <input type="number" id="number" class="form-control" required  name="cedula">
                                    </div>
                                </div>
                                <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="email" class="control-label col-md-3 col-sm-3">Correo</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <input type="email" id="email" class="form-control" required  name="correo">
                                    </div>
                                </div>
                                <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="password" class="control-label col-md-3 col-sm-3">Contraseña</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <input type="password" data-validate-length="6,8" id="password" class="form-control" required  name="password">
                                    </div>
                                </div>
                                <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="password2" class="control-label col-md-3 col-sm-3">Repetir contraseña</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <input type="password" id="password2" data-validate-linked="password" class="form-control" required  name="password2">
                                    </div>
                                </div>
                                <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                    <label class="control-label col-md-3 col-sm-3">Rol</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <select class="select2_single form-control" required="required" id="rol" name="rol">
                                            <option value>Seleccione un rol</option>
                                            <?php 
                                            foreach ($rol as $roles) 
                                            {
                                                echo "<option value=" . $roles['id_rol']. ">" . $roles['descripcion']. "</option>";                    
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                    <button type="reset" class="btn btn-default">Limpiar</button>
                                    <button class="btn btn-default"><a href="<?php echo 
                                    getUrl("Usuario","usuario","listar"); ?>">Cancelar</a></button>
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