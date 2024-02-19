<?php

    interface CarroPadrao {
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }

    interface CarroGuerra {
        function atiraCanhao();
        function atiraMetralhadora();
    }

    abstract class CarroBase implements CarroPadrao, CarroGuerra {
        public $potencia;
        public $velMax;
        public $ligado=false;

        public function liga() {
            $this->ligado=true;
        }

        public function desliga() {
            $this->ligado=false;
        }

        public function status() {
            echo "<hr>";
            echo "Potencia: ".$this->potencia;
            echo "<br>Velocidade Máxima: ".$this->velMax;
            echo "<br>";
            if($this->ligado) {
                echo "Este carro está ligado";
            } else {
                echo "Esse carro NÃO está ligado";
            }
            echo "<hr>";
        }

        public function acelera(){}
        public function freia(){}
        public function atiraCanhao(){}
        public function atiraMetralhadora(){}

    }

    class Carro extends CarroBase {
        public function __construct($pt, $vm) {
            $this->potencia=$pt;
            $this->velMax=$vm;

            $this->status();
        }
    }

    $carro1 = new Carro(150,280);
    $carro1->liga();
    $carro1->status();

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 23 de PHP - Classes parte 4</title>
    </head>
    <body>
        
    </body>
</html>
