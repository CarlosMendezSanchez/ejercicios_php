<?php
$edad = $_POST['edad'];

if ($edad <= 12){
    echo "Infante";
} else if ($edad > 12 && $edad <= 17) {
    echo "Adolescente";
} else if ($edad >= 18 && $edad <= 60 ) {
    echo "Adulto";
} else if ($edad > 60){
    echo "Anciano";
}
?>
