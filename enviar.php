<?php
  $destino = "edwinpruebasti@gmail.com";
  $nombre = $_POST["Nombre"];
  $correo = $_POST["Correo"];
  $telefono = $_POST["Teléfono"];
  $mensaje = $_POST["Mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
  $mail = @mail($destino,"Contacto",$contenido);
  if ($mail){
    header("Location:/envio/envio.php"); /*Al presionar submit se dirige a la página gracias.html*/
    /*echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";*/
  }
 ?>
