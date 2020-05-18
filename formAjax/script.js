    'use strict'
function enviarDatos() {
    var n = document.getElementById('nombre').value;
    var ap = document.getElementById('aPaterno').value;
    var am = document.getElementById('aMaterno').value;
    
    var url ="procesarDatos.php";
    
    $.ajax({
        
        type:"post",
        url:url,
        data:{nombre:n,aPaterno:ap,aMaterno:am},
        
        success: function(datos){
            $("#MostrarDatos").html(datos);
        }
    })
}