<?php
$dia = $_POST['dia'];

switch ($dia) {
    case '1':
        echo "Lunes";
        break;
    case '2':
        echo "Martes";
        break;
    case '3':
        echo "Miercoles";
        break;
    case '4':
        echo "Jueves";
        break;
    case '5':
        echo "Viernes";
        break;
    case '6':
        echo "Sabado";
        break;
    case '7':
        echo "Domingo";
        break;
    default:
        echo "No existe un día asignado a ese numero, el rango se encuentra entre 1 a 7";
        break;
}
?>
