<?php
$tabla = $_POST['tabla'];
$resultado = 0;

for ($i = 0; $i <= 10; $i++) {
        $resultado = $tabla * $i;
        echo $tabla . " x " . $i . " = " .  $resultado . "<br>";
}
?>
