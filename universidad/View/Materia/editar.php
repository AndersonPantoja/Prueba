<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Ciudad</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Ciudad
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("Materia","materia","postEditar"); ?>">
                                        <div class="form-group">
                                            <label>Id Ciudad</label>
                                            <label class="form-control"><?php foreach($materia as $materias){} echo $materias['id_materia']; ?></label>
                                            <input class="form-control" name="id_materia" type="hidden" value="<?php echo $materias['id_materia']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion materia</label>
                                                    <input class="form-control" name="nombre" value="<?php echo $materias['nombre']?>">
                                        </div>

                                        <button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("usuarios","usuario","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>