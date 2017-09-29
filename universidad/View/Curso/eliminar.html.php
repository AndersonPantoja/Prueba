<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar Usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Est&aacute; seguro de eliminar el departamento:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Id Departamento</label>
                                            <label><?php echo $dep_id; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre del Departamento</label>
                                            <label><?php if($row=  pg_fetch_object($usuarios))
                                                    { echo $row->dep_nombre;} ?></label>
                                        </div>
                                        <button><a href="<?php echo 
                                        getUrl("usuarios","usuario","postEliminar",
                                                array("dep_id"=>$dep_id)); ?>">
                                                S&iacute;, estoy seguro</a></button>
                                    
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                        <button><a href="<?php echo 
                                        getUrl("usuarios","usuario","listar"); ?>">
                                                No, cambi&eacute; de opini&oacute;n</a></button>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>