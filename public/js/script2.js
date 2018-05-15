$(document).ready(function () {
    Carga();

    $("#actualizar").click(function () {
     var dato =$("#genre").val();
     var value =$("#id").val();
     var route ="http://localhost/laravel/public/genero/"+value;
     var token = $("#token").val();
     
      $.ajax({
            url: route,
            headers:{'X-CSRF-TOKEN': token},
            type: 'PUT',
            dataType: 'json',
            data:{genre:dato},
            success: function (result) {
                
                //console.log("Salida",result);
                //var obj = jQuery.parseJSON(result);
                
                if(result.exito="ok"){
                    $("#mensajejsontxt").html(result.mensaje);
                    $("#msj-success").fadeIn();
                    Carga();
                    $("#myModal").modal('toggle'); 
                    
                }
        }});
    
    });

});
function Carga(){
    $("#datos").empty();
    var tabla = $("#datos");
    var route = "http://localhost/laravel/public/generos";
    $.get(route, function (res) {
        $(res).each(function (key, value) {
            tabla.append("<tr><td>" + value.genre + "</td>" +
                    "<td><button value='" + value.id + "' onClick='Mostrar(this)'"+
                    " class='btn btn-primary' data-toggle='modal' data-target='#myModal' >Editar</button>" +
                    "<button value='" + value.id + "' onClick='Eliminar(this)'"+
                    " class='btn btn-danger' >Eliminar</button></td></tr>"
                    );
        })
    });
}
function Eliminar(btn) {
    if(confirm("Esta seguro de eliminar este elemento")){
     //var dato =$("#genre").val();
     var value =btn.value;
     var route ="http://localhost/laravel/public/genero/"+value;
     var token = $("#token").val();
     
      $.ajax({
            url: route,
            headers:{'X-CSRF-TOKEN': token},
            type: 'DELETE',
            dataType: 'json',
            success: function (result) {
                
                //console.log("Salida",result);
                //var obj = jQuery.parseJSON(result);
                
                if(result.exito="ok"){
                    $("#mensajejsontxt").html(result.mensaje);
                    $("#msj-success").fadeIn();
                    Carga();
                    //$("#myModal").modal('toggle'); 
                    
                }
        }});
    }
}

function Mostrar(btn) {
    console.log("id:" + btn.value);
    var route = "http://localhost/laravel/public/genero/"+btn.value+"/edit";
    $.get(route,function(res){
        $("#genre").val(res.genre);
        $("#id").val(res.id);
    });
}