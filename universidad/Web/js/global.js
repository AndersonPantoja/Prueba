$(document).ready(function(){
    
    $(document).on("keyup","#item1",function(){
        
        var ciu_id=$(this).val();
        var ciu_nom=$('#ciu_nombre').val();
        var url=$(this).attr("data-url");
        
        $.ajax({
            url:url,
            data:"ciu_id="+ciu_id+"&ciu_nom="+ciu_nom,
            type:"POST",
            success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#info_ciudad").html(dato); //la información encontrada se pinta en el div
            }
            
            
        });
        
    });  
    
    
    $(document).on("click", ".cargarDato", function(){
        
        var posicion=$(this).attr('id');
        var ciu_id=$('#ciu_identi'+posicion).val();
        var ciu_nombre=$('#ciu_nombre'+posicion).val();
        
        $("#id_ciudad").val(ciu_id);
        $("#nombre_ciudad").val(ciu_nombre);
         $("#info_ciudad").html("");
        
    });
    
    
    $(document).on("keyup", "#buscar_ciud", function(){
        
        var dato=$(this).val();
        var url=$(this).attr("data-url");
        
        $.ajax({
            
            url:url,
            data:"dato="+dato,
            type:"POST",
            success:function(filtro){
                $("#lista_ciudades").html(filtro);
            }
            
        });
        
    });
    
});
