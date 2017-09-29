<?php
include_once('../../Model/Departamento/departamentoModel.php');


class departamentoController{
	
	function crear(){		
                $objDepto= new departamentoModel();
                /*$sqlDepto = "Select * from departamento order by Depto_nombre";
                $depto = $objDepto->consultar($sqlDepto);
                */
                $objDepto->closeConect();
                include_once('../../View/Departamento/crear.html.php');
	}
	
	function postCrear()
        {
            $errores = array();
            $patronNumeros = "/[0-9]{1,9}(\.[0-9]{0,2})?$/";
            $patronLetras = "/^[a-zA-Z_áéíóúñ\s( )]*$/";
            $patronLetrasNumerosGuiones = "/^[0-9a-zA-Z(-_)-áéíóúñ\s]+$/";
            $patronLetrasNumeros = "/^[0-9a-zA-Z( )]+$/";
            $nombre=$_POST['Depto_nombre'];
            $nombre=strtoupper($nombre);

            //var_dump($horas);
            //die();
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
                $sql="insert into departamento values(null,'$nombre','A')";
                $objDepartamento= new departamentoModel();
                //$departamento=$objDepartamento->Insertar($sql);
                $objDepartamento->closeConect();
                //redirect(getUrl("Departamento","departamento","listar"));
           // }

	}
	
	function listar(){
		$sql="select * from departamento where Depto_estado='A' order by Depto_nombre";
		$objCiudad= new departamentoModel();
		$departamento=$objCiudad->consultar($sql,"objeto");
		$objCiudad->closeConect();
		include_once('../../View/Departamento/listar.html.php');
	}
        
        function getEliminar(){
            $ciu_id=$_GET['ciud_id'];
            $sql="select * from departamento where ciu_id=$ciu_id";
            $objCiudad= new departamentoModel();
            $departamento=$objCiudad->consultar($sql,"objeto");
            $objCiudad->closeConect();
            include_once('../../View/Departamento/eliminar.html.php');
        }
        
        function postEliminar(){
            $Depto_id=$_GET['Depto_id'];
            $sql="update departamento set Depto_estado='I' where Depto_id=$Depto_id";
            $objCiudad= new departamentoModel();
            $departamento=$objCiudad->Actualizar($sql);
            $objCiudad->closeConect();
            redirect(getUrl("Departamento","departamento","listar"));
        }
        
        function getEditar(){
            $Depto_id=$_GET['Depto_id'];
            $sql="select * from departamento where Depto_id=$Depto_id";
            $objDepartamento= new departamentoModel();
            $departamento=$objDepartamento->consultar($sql);           
            $objDepartamento->closeConect();
            include_once('../../view/Departamento/editar.html.php');
        }
        
        function postEditar(){
            $Depto_id=$_POST['Depto_id'];
            $nombre=$_POST['Depto_nombre']; 
            $nombre=strtoupper($nombre);
            $sql="update departamento set 
                Depto_nombre='$nombre'"
                    . "where Depto_id=$Depto_id";
            $objDepartamento= new departamentoModel();
            $departamento=$objDepartamento->Actualizar($sql);
            $objDepartamento->closeConect();
            redirect(getUrl("Departamento","departamento","listar"));
        }

        function fitroAjax()
        {
            //ob_clean();
            //var_dump(expression)
            $ciu_id=$_POST['ciu_id'];
            
            if (empty($ciu_id)) {
               $cons="select * from departamento where Depto_estado='A' order by Depto_nombre";
                }else{
                   $cons="select * from departamento where (Depto_estado='A' and Depto_nombre like '$ciu_id%') or (Depto_estado='A' and Depto_id like '$ciu_id%')  order by Depto_nombre ";
                    }       
            
            $objCiudad= new departamentoModel();
            $departamento=$objCiudad->consultar($cons);            
            //realizo la cosulta y cargo 
            include_once('../../View/Departamento/listaFiltro.html.php');
        }

	
}

?>