<?php 
$chandal =NULL;
$camiseta=NULL;
$sudadera=NULL;
$pantaloncorto=NULL;
$pantalonlargo=NULL;
$deporte=NULL;

if (isset ($_POST['sender'])){
    if (isset ($_POST['chandal'])){
        $chandal= $_POST["chandal"];
    }
    else{
        $chandal = NULL;
    }
    $camiseta= $_POST["camiseta"];
    $sudadera= $_POST["sudadera"];
    $pantaloncorto= $_POST["pantaloncorto"];
    $pantalonlargo= $_POST["pantalonlargo"];
}

//deporte es el nombre para los radio buttons
if(isset($_POST['deporte'])){ //si hay una elección en el radio button...
    $deporte = $_POST['deporte']; //$deporte tomará ese valor
 }
else{
    $deporte = NULL; // si no se elige ninguna opción quedará vacío
 }

echo "<p>Las prendas elegidas para el pedido son: <br> $chandal <br> $camiseta <br> $sudadera<br>  $pantaloncorto<br>  $pantalonlargo <br></p> ";
echo"<br>"; 
echo "Las prendas elegidas son del deporte: <br> $deporte";
?>