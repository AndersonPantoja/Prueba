function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//cajas dinamics del contrato

$(document).ready(function(){

    //-- panel para cambiar clave --
    $(document).on("click", "#setClave", function (){
        $('#myModal').modal('show');
    });

    $(document).on("click", "#guardar", function (){
        var clave = $("#password").val();
        var id = $("#id_u").val();
        $.ajax({
            url:"ajax.php?modulo=Usuario&controlador=usuario&funcion=setPassword",
            data:"clave="+clave+"&id="+id,
            type:"POST",
            success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó

                $("#exito").html(dato); //la información encontrada se pinta en el div
            }
        });
        $('#myModal').modal('hide');
        var clave = $("#password").val("");
        var id = $("#password2").val("");
    });
    //-- panel para cambiar clave --
    
      
    
    //buscar cada vez que precione una tecla 
    $(document).on("keyup","#buscar",function(){
        
        var dato=$(this).val();
        var url=$(this).attr("data-url");
        
        $.ajax({
            url:url,
            data:"dato="+dato,
            type:"POST",
            success: function(res){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó

                $("#listar").html(res); //la información encontrada se pinta en el div
            }
            
            
        });

    });  
    //filtro para los reportes
    $(document).on("click","#buscarT",function(){
        
        //var ciu_id=$(this).val();
        var funcionario=$('#funcionario').val();
        var almacenista=$('#almacenista').val();
        var fini=$('#fini').val();
        var ffin=$('#ffin').val();

        var url=$(this).attr("data-url");
        
        $.ajax({
            url:url,
            data:"funcionario="+funcionario+"&almacenista="+almacenista+"&fini="+fini+"&ffin="+ffin,
            type:"POST",
            success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó

                $("#listar").html(dato); //la información encontrada se pinta en el div
            }
            
            
        });
        
    });
    
});


