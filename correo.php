<?php
// Primera Forma

    // if(isset($_POST['enviar'])){
    //     if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
    //         $nombre = $_POST['nombre'];
    //         $email = $_POST['email'];
    //         $telefono = $_POST['telefono'];
    //         $asunto = $_POST['asunto'];
    //         $mensaje = $_POST['mensaje'];

    //         $header = "From: pinzonsukolega@hotmail.com" . "\r\n";
    //         $header .= "Reply-To: pinzonsukolega@hotmail.com" . "\r\n";
    //         $header .= "X-Mailer: PHP/" . phpversion();

    //         $mail = @mail($email, $asunto, $mensaje, $header);
    //         if ($mail) {
    //             echo "<h4>¡Correo enviado exitosamente!</h4>";
    //         }
    //     }
    // }

    if (isset($_POST['enviar'])) {

        if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
            $destinatario = 'sergiopf1980@gmail.com';
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];

            $header = "Enviado desde Portafolio" . "\r\n";
            $mensajeCompleto = "Nombre: " . $nombre . "\r\n";
            $mensajeCompleto .= "Correo: " . $email . "\r\n";
            $mensajeCompleto .= "Teléfono: " . $telefono . "\r\n";
            $mensajeCompleto .= $mensaje;

            mail($destinatario, $asunto, $mensajeCompleto, $header);
            echo "<h4>¡Correo enviado exitosamente!</h4>";
        }
        
    }
?>