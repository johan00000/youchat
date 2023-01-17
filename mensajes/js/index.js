function verificarConexion(){
    alert('ALERTA SI DE ENVIO EL MS')
}
let cont=0
//1 second = 1000 milliseconds
setInterval('contador()',10000);
function contador()
{
  leerMensajes()
}
function leerMensajes()
    { 
      var parametros = 
      {
        "envia" : document.getElementById("enviar").value,
        "recibe" :  document.getElementById("recivir").value,
        "telefono" : "123456789"
      };

      $.ajax({
        data: parametros,
        url: 'traerMensajes.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mensajes').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mensajes').html(mensaje);
        }
      });
    }
    function enviarMensaje()
    { 
      var parametros = 
      {
        "envia" : document.getElementById("enviar").value,
        "recibe" :  document.getElementById("recivir").value,
        "mensaje" : document.getElementById("mensaje")
      };

      $.ajax({
        data: parametros,
        url: 'enviarMensaje.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mensajes').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mensajes').html(mensaje);
        }
      });
    }