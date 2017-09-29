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
                                <div class="col-lg-6 x_title">
                                    <form id="demo-form" data-parsley-validate role="form" name="departamento" method="post" action="<?php echo getUrl("Materia","Materia","postCrear"); ?>">
<!-- 
                                        <div class="form-group">
                                            <label>Id Ciudad</label>
                                            <input class="form-control" name="ciu_id" type="number">
                                        </div>
-->                                        
                                        <div class="form-group">
                                            <label for="fullname">Nombre de la materia</label>
                                            <input type="text" id="fullname" class="form-control" required  placeholder="Nombre" name="nombre">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Crear</button>
                                        <button type="reset" class="btn btn-default">Limpiar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("Materia","materia","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
           
</div>