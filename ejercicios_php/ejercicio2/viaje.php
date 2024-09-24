<?php
$kilometros = $_POST['distancia'];
$km_por_hora = $_POST['velocidad'];
$resultado = $kilometros/$km_por_hora;

echo "Se tardaría " . $resultado;

?>
