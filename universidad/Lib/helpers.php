<?php
function getUrl($modulo,$controlador,$funcion,$parametros=false, $ajax=false)
{
    if($ajax==false)
    {
        $pagina="index";
    }
    else
    {
        $pagina="ajax";
    }
            
    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

    if($parametros!=false){
            foreach($parametros as $key=>$valor){
                    $url.="&$key=$valor";
            }
    }

    return $url;
}
function getUrl2($modulo,$controlador,$funcion,$parametros=false, $ajax=false)
{
    if($ajax==false)
    {
        $pagina="index";
    }
    else
    {
        $pagina="ajax";
    }
            
    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

    if($parametros!=false){
            foreach($parametros as $key=>$valor){
                    $url.="&$key=$valor";
            }
    }

    return $url;
}

function getTitle($modulo,$funcion)
{

    $return="";
    
    return $return;
}

function dd($variable){
    echo "<pre>";
    die(print_r($variable));
}

function redirect($url){
    echo "<script type='text/javascript'>
    window.location.href='$url';</script>";
}

function setErrores($errores = array()) {

    $mensajeError = "";

    if (is_array($errores) && count($errores) > 0) {

        $mensajeError = "<h6><strong>Por favor corregir los siguientes errores: </strong></h6>"
                . "<ul>";

        foreach ($errores as $error) {

            $mensajeError .= "<li>* " . $error . "</li>";
        }

        $mensajeError .= "</ul>";
    }

    $_SESSION['mensajeError'] = $mensajeError;
}

function getErrores() {

    $mensajeError = "";

    if (isset($_SESSION['mensajeError'])) {

        $mensajeError = $_SESSION['mensajeError'];
        unset($_SESSION['mensajeError']);
    }

    return $mensajeError;
}


function cargarPrincipal()
{
     if(!isset($_GET['modulo']) && !isset($_GET['controlador']) && !isset($_GET['funcion'])){
                    include_once('../../view/Partials/dashboard.php');
            }
            else
            {
               
                $modulo= ucwords($_GET['modulo']);
                $controlador= $_GET['controlador'];
                $funcion= $_GET['funcion'];                                 

                if(is_dir("../../controller/" . $modulo))
                {
                    if(file_exists("../../controller/" . $modulo . "/" . $controlador . "Controller.php"))
                    {
                        include_once('../../Controller/' . $modulo . '/' . $controlador .'Controller.php');                       
                        $nombreClase= $controlador ."Controller";
                        $objControlador= new $nombreClase();

                        if(method_exists($objControlador,$funcion))
                        {
                            $objControlador->$funcion();
                        }
                        else
                        {
                            die("La funcion especificada no existe");
                        }

                    }
                    else
                    {
                        die("El controlador especificado no existe");
                    }
                }
                else
                {
                    die("El modulo especificado no existe");
                }
            }
}

?>