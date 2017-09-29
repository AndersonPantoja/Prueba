<?php
include_once('../../Model/Usuario/usuarioModel.php');

class usuarioController{

    function validar(){ 
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $objLogin = new usuarioModel; 
        $sql = "select * from usuario where cedula='$usuario' and clave='$password'";
        $login = $objLogin->consultar($sql);
        $objLogin -> closeConect();      

        if (!empty($login)){
            $_SESSION['cedula']  = $usuario;
            $_SESSION['clave']  = $password;
            $_SESSION['id_usuario']  = $login[0]['id_usuario'];
            $_SESSION['nombre']  = $login[0]['nombre'];
            $_SESSION['rol']  = $login[0]['id_rol'];
            redirect("../../Web/production/index.php");
        }else{
            redirect('../../Web/production/login.php?x=1');
        }
    }
    function cerrarSesion(){
        if(isset($_SESSION['id_usuario']))
       {
            session_destroy();
           //echo "Has cerrado la sesion";
            redirect("../../Web/production/login.php");
       }
       else
       { 
         //echo "No hay ninguna sesion iniciada";
        //esto ocurre cuando la sesion caduca.
           
        }
	}

	function crear(){		
                $obj= new usuarioModel();
                $sqlDepto = "select * from rol";
                $rol = $obj->consultar($sqlDepto);
                $obj->closeConect();
                include_once('../../View/Usuario/crear.php');
	}
	
	function postCrear()
        {
            $nombre=$_POST['nombre'];
            $cedula=$_POST['cedula'];
            $correo=$_POST['correo'];
            $clave=$_POST['password'];
            $rol=$_POST['rol'];
            $nombre=mb_strtoupper($nombre,'UTF-8');
            $correo=mb_strtoupper($correo,'UTF-8');
            
                echo $sql="insert into usuario values(null,'$rol','$nombre','$cedula','$correo','$clave', 'A')";
                $obj= new usuarioModel();
                $usuario=$obj->Insertar($sql);
                $obj->closeConect();
                redirect(getUrl("Usuario","usuario","listar"));

	}
	
	function listar(){
		$sql="select * from usuario natural join rol where estado='A' order by id_usuario desc";
		$obj= new usuarioModel();
		$usuario=$obj->consultar($sql,"objeto");
		$obj->closeConect();
		include_once('../../View/Usuario/listar.php');
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

        $sql="update usuario set clave=$clave where id_usuario=$id_usuario";
        $obj= new usuarioModel();
        $set=$obj->Actualizar($sql);
        $obj->closeConect();
        
        if($set==true){
         echo "contraseña actualizada con exito";
        }else{
            echo "error al cambiar la contraseña";
            }
    }
        function postEliminar(){
            $id_usuario=$_GET['id_usuario'];
            $sql="update usuario set estado='I' where id_usuario=$id_usuario";
            $objCiudad= new usuarioModel();
            $ciudad=$objCiudad->Actualizar($sql);
            $objCiudad->closeConect();
            redirect(getUrl("Usuario","usuario","listar"));
        }
        
        function getEditar(){
            $id_usuario=$_GET['id_usuario'];
            $sql="select * from usuario where id_usuario=$id_usuario";
            $sqlr="select * from rol";
            $obj= new usuarioModel();
            $usuario=$obj->consultar($sql);  
            $rol=$obj->consultar($sqlr);          
            $obj->closeConect();
            include_once('../../View/Usuario/editar.php');
        }
        
        function postEditar(){
            $id_usuario=$_POST['id_usuario'];
            $nombre=$_POST['nombre'];
            $cedula=$_POST['cedula'];
            $correo=$_POST['correo'];
            $rol=$_POST['rol'];
            $nombre=mb_strtoupper($nombre,'UTF-8');
            $correo=mb_strtoupper($correo,'UTF-8');    

            $sql="update usuario set nombre='$nombre', cedula='$cedula', correo='$correo', id_rol='$rol' where id_usuario=$id_usuario";
            $obj= new usuarioModel();
            $usuario=$obj->Actualizar($sql);
            $obj->closeConect();  
            redirect(getUrl("Usuario","usuario","listar"));
        }
        
        function fitroAjax()
        {
            //ob_clean();
            //var_dump(expression)
            $dato=$_POST['dato'];
            
            if (empty($dato)) {
                $cons="select * from usuario natural join rol where estado='A' order by id_usuario desc";
                }else{
                    $cons="select * from usuario natural join rol where (estado='A' and cedula like '$dato%') or (estado='A' and descripcion like '$dato%') or (estado='A' and nombre like '$dato%') order by id_usuario desc";
                    }
            
            $objCiudad= new usuarioModel();
            $usuario=$objCiudad->consultar($cons);            
            //realizo la cosulta y cargo 
            $objCiudad->closeConect();
            include_once('../../view/Usuario/listaAjax.html.php');
        }
	
}

?>