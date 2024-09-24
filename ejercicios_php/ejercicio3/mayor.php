<?php
$primero = $_POST['primero'];
$segundo = $_POST['segundo'];
$tercero = $_POST['tercero'];

if ($primero > $segundo && $primero > $tercero){
    echo "El numero mayor es " . $primero;
} else if ($segundo > $primero && $segundo > $tercero) {
    echo "El numero mayor es " . $segundo;
}  else if ($tercero > $primero && $tercero > $segundo) {
    echo "El numero mayor es " . $tercero;
}
?>
