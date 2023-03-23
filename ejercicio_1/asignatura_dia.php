<?php
    var_dump($_POST);
    $dia = $_POST["asignatura"];

    switch ($dia) {
        case 'Lunes':
        echo "Matemáticas";
            break;
        case 'Martes':
            echo "Lengua";
            break;
        case 'Miércoles':
            echo "Física";
            break;
        case 'Jueves':
            echo "Dibujo Técnico";
            break;
        case 'Viernes':
            echo "Francés";
            break;
        default:
            echo "No existe ese día";
            break;
    }
?>
