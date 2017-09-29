
    <div id="page-wrapper">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-6">
            <h1 class="page-header">MATERIAS</h1>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 form-group ">
        <label>Buscar</label>
        <input class="form-control" name="buscar" id='buscar' data-url='<?php echo getUrl("Materia", "materia", "fitroAjax", false, true)?>'>
        </div> 
        <!-- /.col-lg-12 -->
    </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-10">
            <a class="btn btn-primary" href="index.php?modulo=Materia&controlador=materia&funcion=crear">Crear materia</a>
        </div>
    </div>
    <!-- /.row -->
    <div class="x_panel">
    
    <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th colspan="3" align='/center/' >Acciones</th>

                    </tr>
                </thead>
                <tbody id='listar'>
                    <?php              
                        if(!empty($materia)){
                            foreach ($materia as $materias) 
                            {
                                echo"<tr>";
                                    echo"<td>".$materias['id_materia']."</td>";
                                    echo"<td>".$materias['nombre']."</td>";                                
                                    echo"<td><a href='index.php?modulo=Materia&controlador=materia&funcion=getEditar&id_materia=".$materias['id_materia']."'><button class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></button></a></td>";
                                    echo"<td><a href=\"javascript:myFunction('".$materias['id_materia']."')\"><button data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa fa-times'></i></button></a></td>";
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
    $('#aceptar').attr('href', 'index.php?modulo=Materia&controlador=materia&funcion=postEliminar&id_materia='+id);
    $('#myModal').modal('show');
}
//myFunction();
</script>
<!-- jQuery -->