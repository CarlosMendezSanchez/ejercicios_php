<?php
$producto = $_POST['producto'];

$array = explode(',', $producto);
for ($i = 0; $i < count($array); $i++) {
    echo "Producto: " . $i . " ";
    echo $array[$i];
    print("<br>");
}
?>
