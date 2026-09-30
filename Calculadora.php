<?php

class Calculadora{
    public $Numero1;
    public $Numero2;
    public $operacao;
    public $resultado;

    public function somar($n1,$n2){
        $this->resultado = $n1+$n1;
        $this-> exibir();
    }
      public function subtrair(){
        $this->resultado = $n1-$n1;
        $this-> exibir();
    }
      public function multiplicar(){
        $this->resultado = $n1*$n1;
        $this-> exibir();
    }
      public function  dividir(){
        if($Numero1 == 0){
            echo "ERRO: ZERRO NÃO É DIVISIVEL"
        } elseif ($Numero2 == 0){
             echo "ERRO: ZERRO NÃO É DIVISIVEL"
        }else {
        $this->resultado = $n1/$n1;
        $this-> exibir();

        }
    }

    public function exibir(){
        echo "<br> Resultado: $resultado"
    }

    switch($operacao){
        case "+"
        $this->somar();
        break;
        case "-"
        $this->substrair();
        break;
        case "*"
        $this->multiplicar();
        break;
        case "/"
        $this->dividir();
        break;
    }
}