<?php
$numero = $_POST['numero'];
$total = 0;

for ($i = 0; $i <= $numero; $i++) {
    $total += $i;
}

echo "El total es " . $total;
?>
