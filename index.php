<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sitio con PHP y JavaScript</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div id="chat"></div>
    <input type="text" id="usuario" placeholder="Nombre de usuario">
    <input type="text" id="mensaje" placeholder="Escribe tu mensaje">
    <button onclick="enviarMensaje()">Enviar</button>

    <script>
        function cargarMensajes() {
            $.get("GetMessage.php", function (data) {
                $("#chat").html(data);
            });
        }

        function enviarMensaje() {
            var usuario = $("#usuario").val();
            var mensaje = $("#mensaje").val();

            $.post("PostMessage.php", { usuario: usuario, mensaje: mensaje }, function () {
                cargarMensajes();
                $("#mensaje").val("");
            });
        }

        
        $(document).ready(function () {
            cargarMensajes();
            
            setInterval(cargarMensajes, 3000);
        });
    </script>
</body>
</html>
