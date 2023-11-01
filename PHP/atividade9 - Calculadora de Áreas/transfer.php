<?php

$forma = $_POST["escolha_forma"];

switch ($forma) {
    case 'quadrado':
        header("Location: formas/quadrado.php");
        exit;
        break;
    
    case 'trapezio':
        header("Location: formas/trapezio.php");
        exit;
        break;
    
    case 'retangulo':
        header("Location: formas/retangulo.php");
        exit;
        break;

    case 'triangulo_equilatero':
        header("Location: formas/triangulo_equilatero.php");
        exit;
        break;
    
    case 'triangulo_qualquer':
        header("Location: formas/triangulo_qualquer.php");
        exit;
        break;

    case 'paralelogramo':
        header("Location: formas/paralelogramo.php");
        exit;
        break;

    case 'losangulo':
        header("Location: formas/losangulo.php");
        exit;
        break;

    case 'circulo':
        header("Location: formas/circulo.php");
        exit;
        break;

    default:
        echo "nothin";
        break;
}

?>