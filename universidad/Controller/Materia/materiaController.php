<?php
include_once('../../Model/Materia/materiaModel.php');


class materiaController{
	
	function crear(){		
                $objDepto= new materiaModel();
                $sqlDepto = "";
                //$depto = $objDepto->consultar($sqlDepto);
                $objDepto->closeConect();
                include_once('../../View/Materia/crear.php');
	}
	
	function postCrear()
        {
            
            $nombre=$_POST['nombre'];
            $nombre=mb_strtoupper($nombre,'UTF-8');
            
                echo $sql="insert into materia values(null,'$nombre', 'A')";
                $obj= new materiaModel();
                $materia=$obj->Insertar($sql);
                $obj->closeConect();
                redirect(getUrl("Materia","materia","listar"));

	}
	
	function listar(){
		$sql="select * from materia where estado='A' order by id_materia desc";
		$obj= new materiaModel();
		$materia=$obj->consultar($sql,"objeto");
		$obj->closeConect();
		include_once('../../View/Materia/listar.php');
	}
        
        /*function getEliminar(){
            $ciu_id=$_GET['ciud_id'];
            $sql="select * from ciudad where ciu_id=$ciu_id";
            $objCiudad= new materiaModel();
            $ciudad=$objCiudad->consultar($sql,"objeto");
            $objCiudad->closeConect();
            include_once('../../View/Ciudad/eliminar.html.php');
        }*/
        
        function postEliminar(){
            $id_materia=$_GET['id_materia'];
            $sql="update materia set estado='I' where id_materia=$id_materia";
            $objCiudad= new materiaModel();
            $ciudad=$objCiudad->Actualizar($sql);
            $objCiudad->closeConect();
            redirect(getUrl("Materia","materia","listar"));
        }
        
        function getEditar(){
            $id_materia=$_GET['id_materia'];
            $sql="select * from materia where id_materia=$id_materia";
            $obj= new materiaModel();
            $materia=$obj->consultar($sql);            
            $obj->closeConect();
            include_once('../../View/Materia/editar.php');
        }
        
        function postEditar(){
            $id_materia=$_POST['id_materia'];
            $nombre=$_POST['nombre'];  
            $nombre=mb_strtoupper($nombre,'UTF-8');     

            $sql="update materia set nombre='$nombre'"
                    . "where id_materia=$id_materia";
            $obj= new materiaModel();
            $materia=$obj->Actualizar($sql);
            $obj->closeConect();
            redirect(getUrl("Materia","materia","listar"));
        }
        
        function fitroAjax()
        {
            //ob_clean();
            //var_dump(expression)
            $dato=$_POST['dato'];
            
            if (empty($dato)) {
                echo $cons="select * from materia where estado='A' order by id_materia desc ";
                }else{
                    echo $cons="select * from materia where (estado='A' and id_materia like '$dato%') or (estado='A' and nombre like '$dato%') order by id_materia desc ";
                    }
            
            $objCiudad= new materiaModel();
            $materia=$objCiudad->consultar($cons); 
            $objCiudad->closeConect();
            include_once('../../view/Materia/listaAjax.html.php');
        }
}

?>