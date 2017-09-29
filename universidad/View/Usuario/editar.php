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
                            <form role="form" class="form-horizontal form-label-left" name="frm_ciudad" method="post" action="<?php echo getUrl("Usuario","usuario","postEditar"); ?>">
                                <div class="form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="fullname" class="control-label col-md-3 col-sm-3">Nombre<?php foreach ($usuario as $usuarios) {}?></label>
                                    <div class="col-md-8 col-sm-8">
                                        <input type="text" id="fullname" class="form-control" required  placeholder="Nombre" name="nombre" value="<?php echo $usuarios['nombre']; ?>">
                                    </div>
                                    <input type="hidden" class="form-control" required  placeholder="Nombre" id="id_u" name="id_usuario" value="<?php echo $usuarios['id_usuario']; ?>"/>
                                </div>
                                <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="number" class="control-label col-md-3 col-sm-3">Cedula</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <input type="number" id="number" class="form-control" required  name="cedula" value="<?php echo $usuarios['cedula']; ?>">
                                    </div>
                                </div>
                                <div class="item form-group col-md-11 col-sm-11 col-xs-11">
                                    <label for="email" class="control-label col-md-3 col-sm-3">Correo</label>
                                    <div class="item col-md-8 col-sm-8">
                                        <input type="email" id="email" class="form-control" required  name="correo" value="<?php echo $usuarios['correo']; ?>">
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
                                                $seleccion="";
                                                if($roles['id_rol']==$usuarios['id_rol'])
                                                {
                                                    $seleccion="selected";
                                                }
                                                echo "<option value=" . $roles['id_rol']. " $seleccion>" . $roles['descripcion']. "</option>";                     
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