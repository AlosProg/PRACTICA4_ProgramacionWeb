<?php
$name;
$email;
$comments;
$subject;
$usuario;
$telefono;
$presencial;
$digital;
$otros;
$eBiz="waz@wazooHome.net";
if (isset ($_POST['sender'])){
    $name=$_POST["userName"];
    $email=$_POST["mailNow"];
    $comments=$_POST["talk"];
    $subject=$_POST["subject"];
    $telefono = $_POST["telefono"];
    $presencial = $_POST["presencial"];
    $digital = $_POST["digital"];
    $otros = $_POST["otros"];
    //usuario es el nombre para los radio buttons
    if(isset($_POST['usuario'])){ //si hay una elección en el radio button...
        $usuario = $_POST['usuario']; //$usuario tomará ese valor
    }
    else{
        $usuario = ""; // si no se elige ninguna opción quedará vacío
    }
}


$comments .= "\r\r\r\nFrom-> $name : Enviar respuesta a: $email";
mail ($eBiz, $subject, $comments);
echo "Su correo electrónico ha sido enviado a $eBiz. Gracias por su interés en
Diseño y desarrollo del sitio web de Wazoo. $usuario, $subject,  $telefono, $presencial, $digital, $otros" ;
?>