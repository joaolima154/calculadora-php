<?php
    require_once "Calculadora.php";

    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $op = $_POST['op'];

    $casio = new Calcularadora();

    $casio-> Numero1 = $n1;
    $casio-> Numero2 = $n2;
    $casio-> operacao = $op;
    $casio-> chapeuSeletor();
