<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $email = htmlspecialchars($_POST['email']);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  $to = "info@reformaplus.es"; // Cambia por tu correo real
  $subject = "Nuevo mensaje de contacto de $nombre";
  $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";

  if (mail($to, $subject, $body)) {
    echo "<script>alert('Gracias por contactarnos, $nombre. Te responderemos pronto.'); window.history.back();</script>";
  } else {
    echo "<script>alert('Error al enviar el mensaje. Inténtalo de nuevo.'); window.history.back();</script>";
  }
}
?>
