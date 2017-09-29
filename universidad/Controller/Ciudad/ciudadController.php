<?php
include_once('../../Model/Ciudad/ciudadModel.php');


class ciudadController{
	
	function crear(){		
                $objDepto= new ciudadModel();
                $sqlDepto = "Select * from departamento order by Depto_nombre";
                $depto = $objDepto->consultar($sqlDepto);
                $objDepto->closeConect();
                include_once('../../View/Ciudad/crear.html.php');
	}
	
	function postCrear()
        {
            $errores = array();
            $patronNumeros = "/[0-9]{1,9}(\.[0-9]{0,2})?$/";
            $patronLetras = "/^[a-zA-Z_áéíóúñ\s( )]*$/";
            $patronLetrasNumerosGuiones = "/^[0-9a-zA-Z(-_)-áéíóúñ\s]+$/";
            $patronLetrasNumeros = "/^[0-9a-zA-Z( )]+$/";
            $id=$_POST['ciu_id'];
            $nombre=$_POST['ciu_nombre'];
            $depto=$_POST['depto_id'];
            $nombre=strtoupper($nombre);
            //--- Validacion de campos --//
            /*if (!isset($id) or $id == "") 
            {
                $errores[] = '(*) El campo <strong><code>"Id Ciudad"</strong></code> es obligatorio';
            }
            
            if (isset($id) && !empty($id)) 
            {
                if (!preg_match($patronNumeros, $id)) {
                    $errores[] = '(*) El campo <strong><code>"Id Ciudad"</strong></code> unicamente admite Números';
                }
               
            }
            
            if (count($errores) > 0) 
            {
            
                setErrores($errores);            
            } 
            else 
            {    */                    
                $sql="insert into ciudad values(null,'$nombre', '$depto', 'A')";
                $objCiudad= new ciudadModel();
                $ciudad=$objCiudad->Insertar($sql);
                $objCiudad->closeConect();
                redirect(getUrl("Ciudad","ciudad","listar"));
           // }

	}
	
	function listar(){
		$sql="select * from ciudad natural join departamento where ciud_estado='A' order by ciu_nombre";
		$objCiudad= new ciudadModel();
		$ciudad=$objCiudad->consultar($sql,"objeto");
		$objCiudad->closeConect();
		include_once('../../View/Ciudad/listar.html.php');
	}
        
        function getEliminar(){
            $ciu_id=$_GET['ciud_id'];
            $sql="select * from ciudad where ciu_id=$ciu_id";
            $objCiudad= new ciudadModel();
            $ciudad=$objCiudad->consultar($sql,"objeto");
            $objCiudad->closeConect();
            include_once('../../View/Ciudad/eliminar.html.php');
        }
        
        function postEliminar(){
            $ciu_id=$_GET['ciu_id'];
            $sql="update ciudad set ciud_estado='I' where ciu_id=$ciu_id";
            $objCiudad= new ciudadModel();
            $ciudad=$objCiudad->Actualizar($sql);
            $objCiudad->closeConect();
            redirect(getUrl("Ciudad","ciudad","listar"));
        }
        
        function getEditar(){
            $ciu_id=$_GET['ciu_id'];
            $sql="select * from ciudad where Ciu_id=$ciu_id";
            $sqlDepto="select * from departamento";
            $objCiudad= new ciudadModel();
            $ciudad=$objCiudad->consultar($sql);            
            $depto=$objCiudad->consultar($sqlDepto);            
            $objCiudad->closeConect();
            include_once('../../view/Ciudad/editar.html.php');
        }
        
        function postEditar(){
            $ciu_id=$_POST['ciu_id'];
            $ciu_nombre=$_POST['ciu_nombre'];  
            $ciu_nombre=strtoupper($ciu_nombre);      
            $depto=$_POST['dep_id'];        
            $sql="update ciudad set Ciu_nombre='$ciu_nombre', Depto_id='$depto' "
                    . "where Ciu_id=$ciu_id";
            $objCiudad= new ciudadModel();
            $ciudad=$objCiudad->Actualizar($sql);
            $objCiudad->closeConect();
            redirect(getUrl("Ciudad","ciudad","listar"));
        }
        
        function fitroAjax()
        {
            //ob_clean();
            //var_dump(expression)
            $ciu_id=$_POST['ciu_id'];
            
            if (empty($ciu_id)) {
                $cons="select Ciu_id, Ciu_nombre, Depto_nombre from ciudad natural join departamento where ciud_estado='A' order by ciu_nombre ";
                }else{
                    $cons="select Ciu_id, Ciu_nombre, Depto_nombre from ciudad natural join departamento where (ciud_estado='A' and Ciu_nombre like '$ciu_id%') or (ciud_estado='A' and Ciu_id like '$ciu_id%')  order by ciu_nombre ";
                    }
            
            $objCiudad= new ciudadModel();
            $ciudad=$objCiudad->consultar($cons);            
            //realizo la cosulta y cargo 
            $objCiudad->closeConect();
            include_once('../../view/Ciudad/listaAjax.html.php');
        }

        function getGrafico(){
            $sql="select Ciu_id from ciudad order by Ciu_nombre";
            $objCiudad= new ciudadModel();
            $ciudad=$objCiudad->consultar($sql);
            $objCiudad->closeConect();
            //echo json_decode($ciudad);
            include_once('../../view/Ciudad/grafico.php');
        }

	
}

?>