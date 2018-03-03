<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];
// $para = 'ventas@comoconocermujeres.com';
$para = 'comercial@eva.net.co';
$titulo = 'COMO CONOCER MUJERES';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Pais: $pais\n Telefono: $telefono\n E-Mail: $email\n Mensaje: $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://comoconocermujeres.com';
</script>";
} else {
echo 'Falló el envio';
}
}
?>