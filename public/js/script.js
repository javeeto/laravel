$(document).ready(function () {
    $("#registro").click(function () {
        var dato =$("#genre").val();
        var route ="http://localhost/laravel/public/genero";
        var token = $("#toke").val();
        $.ajax({
            url: route,
            headers:{'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data:{genre:dato},
            success: function (result) {
                
                console.log("Salida",result);
                //var obj = jQuery.parseJSON(result);
                
                if(result.exito="ok"){
                    $("#msj-success").fadeIn();
                }
        },
        error: function(msj){
            console.log("Salida:",msj.responseJSON.errors.genre);
            $("#msjerrorjsontxt").html(msj.responseJSON.errors.genre);
            $("#msj-error").fadeIn();
        }
    });
        
        });
        
    
});

