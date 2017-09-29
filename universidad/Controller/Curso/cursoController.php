<?php
include_once('../../Model/Curso/cursoModel.php');

class cursoController{
	
	function crear(){	
                $sqlUsu = "select * from usuario where id_rol=2";
                $sqlMat = "select * from materia";	
                $obj= new cursoModel();
                $usuario = $obj->consultar($sqlUsu);
                $materia = $obj->consultar($sqlMat);
                $obj->closeConect();
                $dia=array("LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO");
                include_once('../../View/Curso/crear.php');
	}
	
	function postCrear()
        {
            $cupos=$_POST['cupos'];
            $fini=$_POST['fini'];
            $ffin=$_POST['ffin'];
            $dia=$_POST['dia'];
            $hini=$_POST['hini'];
            $hfin=$_POST['hfin'];
            $profesor=$_POST['profesor'];
            $materia=$_POST['materia'];
            
            $sql="insert into curso values(null,'$materia','$profesor','$cupos','$fini','$ffin','$dia','$hini','$hfin', 'A')";
            $obj= new cursoModel();
            $curso=$obj->Insertar($sql);
            $obj->closeConect();
            redirect(getUrl("Curso","curso","listar"));

	}
	
	function listar(){
		$sql="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.estado='A' order by id_curso desc";
		$obj= new cursoModel();
		$curso=$obj->consultar($sql,"objeto");
		$obj->closeConect();
		include_once('../../View/Curso/listar.php');
	}
    function inscripcion(){
        $sql="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.estado='A' order by id_curso desc";
        $obj= new cursoModel();
        $curso=$obj->consultar($sql,"objeto");
        $obj->closeConect();
        include_once('../../View/Curso/inscripcion.php');
    }
    function listar_mce(){
        $id_u=$_SESSION['id_usuario'];
        $sql="select c.id_curso, m.nombre as materia, p.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c natural join inscripcion i inner join usuario u on i.estudiante=u.id_usuario, usuario p where p.id_usuario=c.profesor and c.estado='A' and i.estudiante=$id_u order by id_curso desc";
        $obj= new cursoModel();
        $curso=$obj->consultar($sql,"objeto");
        $obj->closeConect();
        include_once('../../View/Curso/miCursoE.php');
    }
    function listar_mcp(){
        $id_u=$_SESSION['id_usuario'];
        $sql="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.estado='A' and c.profesor=$id_u order by id_curso desc";
        $obj= new cursoModel();
        $curso=$obj->consultar($sql,"objeto");
        $obj->closeConect();
        include_once('../../View/Curso/miCursoP.php');
    }
        
        /*function getEliminar(){
            $ciu_id=$_GET['ciud_id'];
            $sql="select * from ciudad where ciu_id=$ciu_id";
            $objCiudad= new materiaModel();
            $ciudad=$objCiudad->consultar($sql,"objeto");
            $objCiudad->closeConect();
            include_once('../../View/Ciudad/eliminar.html.php');
        }*/
    function setPassword(){
        $id_usuario=$_POST['id'];
        $clave=$_POST['clave'];

        $sql="update curso set clave=$clave where id_usuario=$id_usuario";
        $obj= new cursoModel();
        $set=$obj->Actualizar($sql);
        $obj->closeConect();
        
        if($set==true){
         echo "contraseña actualizada con exito";
        }else{
            echo "error al cambiar la contraseña";
            }
    }
        function postEliminar(){
            $id_curso=$_GET['id_curso'];
            $sql="update curso set estado='I' where id_curso=$id_curso";
            $objCiudad= new cursoModel();
            $ciudad=$objCiudad->Actualizar($sql);
            $objCiudad->closeConect();
            redirect(getUrl("Curso","curso","listar"));
        }
        
        function getEditar(){
            $id_curso=$_GET['id_curso'];
            $sql="select * from curso where id_curso=$id_curso";
            $sqlr="select * from usuario where id_rol=2";
            $sqlm="select * from materia";
            $obj= new cursoModel();
            $curso=$obj->consultar($sql);  
            $usuario=$obj->consultar($sqlr); 
            $materia=$obj->consultar($sqlm);         
            $obj->closeConect();
            $dia=array("LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO");
            include_once('../../View/Curso/editar.php');
        }
        
        function postEditar(){
            $id_curso=$_POST['id_curso'];
            $cupos=$_POST['cupos'];
            $fini=$_POST['fini'];
            $ffin=$_POST['ffin'];
            $dia=$_POST['dia'];
            $hini=$_POST['hini'];
            $hfin=$_POST['hfin'];
            $profesor=$_POST['profesor'];
            $materia=$_POST['materia'];   

            $sql="update curso set cupos='$cupos', fecha_inicio='$fini', fecha_fin='$ffin', hora_inicio='$hini', hora_fin='$hfin', dia='$dia', id_materia=$materia, profesor=$profesor where id_curso=$id_curso";
            $obj= new cursoModel();
            $curso=$obj->Actualizar($sql);
            $obj->closeConect();  
            redirect(getUrl("Curso","curso","listar"));
        }
        
        function fitroAjax()
        {
            //ob_clean();
            //var_dump(expression)
            $dato=$_POST['dato'];
            
            if (empty($dato)) {

                $cons="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.estado='A' order by id_curso desc";
                }else{
                 $cons="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where (c.estado='A' and m.nombre like '$dato%') or (c.estado='A' and u.nombre like '$dato%') or (c.estado='A' and c.id_curso like '$dato%') order by id_curso desc";
                }
            
            $objCiudad= new cursoModel();
            $curso=$objCiudad->consultar($cons);            
            //realizo la cosulta y cargo 
            $objCiudad->closeConect();
            include_once('../../view/Curso/listaAjax.html.php');
        }
        function fitroAjaxi()
        {
            //ob_clean();
            //var_dump(expression)
            $dato=$_POST['dato'];
            
            if (empty($dato)) {
                $cons="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.estado='A' order by id_curso desc";
                }else{
                    $cons="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where (c.estado='A' and m.nombre like '$dato%') or (c.estado='A' and u.nombre like '$dato%') or (c.estado='A' and c.id_curso like '$dato%') order by id_curso desc";
                }
            
            $objCiudad= new cursoModel();
            $curso=$objCiudad->consultar($cons);            
            //realizo la cosulta y cargo 
            $objCiudad->closeConect();
            include_once('../../view/Curso/listaAjaxi.php');
        }
        function fitroAjaxE()
        {
            $id_u=$_SESSION['id_usuario'];
            $dato=$_POST['dato'];
            
            if (empty($dato)) {
                $cons="select c.id_curso, m.nombre as materia, p.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c natural join inscripcion i inner join usuario u on i.estudiante=u.id_usuario, usuario p where p.id_usuario=c.profesor and c.estado='A' and i.estudiante=$id_u order by id_curso desc";
                }else{
                    $cons="select c.id_curso, m.nombre as materia, p.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c natural join inscripcion i inner join usuario u on i.estudiante=u.id_usuario, usuario p where (p.id_usuario=c.profesor and i.estudiante=$id_u) and (c.estado='A' and m.nombre like '$dato%') or (c.estado='A' and c.id_curso like '$dato%') group by c.id_curso order by id_curso desc";
                }
            
            $objCiudad= new cursoModel();
            $curso=$objCiudad->consultar($cons); 
            $objCiudad->closeConect();
            include_once('../../view/Curso/listaAjaxE.php');
        }
        function fitroAjaxP()
        {
            $id_u=$_SESSION['id_usuario'];
            $dato=$_POST['dato'];
            
            if (empty($dato)) {
                $cons="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.estado='A' and c.profesor=$id_u order by id_curso desc";
                }else{
                    $cons="select c.id_curso, m.nombre as materia, u.nombre as profesor, c.cupos, c.hora_inicio, c.hora_fin, c.dia from materia m natural join curso c inner join usuario u on c.profesor=u.id_usuario  where c.profesor=$id_u and (c.estado='A' and m.nombre like '$dato%') or (c.estado='A' and c.id_curso like '$dato%') order by id_curso desc";
                }
            
            $objCiudad= new cursoModel();
            $curso=$objCiudad->consultar($cons);            
            //realizo la cosulta y cargo 
            $objCiudad->closeConect();
            include_once('../../view/Curso/listaAjaxP.php');
        }

        function getInsc(){
            $id=$_POST['id'];
            $sql="select * from curso where id_curso=$id";
            $objCiudad= new cursoModel();
            $curso=$objCiudad->consultar($sql); 
            $objCiudad->closeConect();
            include_once('../../View/Curso/insDatos.php');
        }

        function posInsc(){
            $usuario=$_SESSION['id_usuario'];
            $id=$_POST['id'];
            $sqlu="select * from inscripcion where estudiante=$usuario and id_curso=$id";
            $obj= new cursoModel();
            $validar=$obj->consultar($sqlu); 
            

            if(empty($validar)){
                if(!empty($usuario)){
                    $sqli="insert into inscripcion values (null, $id, $usuario)";
                    $sqlu="update curso set cupos=cupos-1 where id_curso=$id";
                    $ins=$obj->Insertar($sqli);
                    $cupos=$obj->Actualizar($sqlu);
                    redirect(getUrl("Curso","curso","inscripcion"));
                }    
            }else{
                echo "Ya estas inscrito en ente curso";
            }
            $obj->closeConect();
        }

        function getEstudiante(){
            $id=$_POST['id'];
            $sql="select * from inscripcion i inner join usuario u on i.estudiante=u.id_usuario  where id_curso=$id";
            $objCiudad= new cursoModel();
            $usuario=$objCiudad->consultar($sql); 
            $objCiudad->closeConect();
            include_once('../../View/Curso/listaEstudiante.php');
        }
	
}

?>