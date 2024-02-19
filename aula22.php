<?php

    abstract class carroBase{
        public $potencia;
        public $velMax;
        public $portas;
        public $ligado=false;
        
        public function ligar() {
            $this->ligado=true;
        }

        public function desligar() {
            $this->ligado=false;
        }
        
        public function status() {
            echo "<hr>";
            echo "Potência: ".$this->potencia;
            echo "<br>Velocidade máxima: ".$this->velMax;
            echo "<br>Portas: ".$this->portas;
            echo "<br>";
            if ($this->ligado) {
                echo "Carro ligado";
            } else {
                echo "Carro desligado";
            }
            echo "<hr>";
        }
    }

    class Carro extends carroBase {
        public function __construct($pt, $vm, $po) {
            $this->potencia=$pt;
            $this->velMax=$vm;
            $this->portas=$po;
            $this->status();
        }
    }

    $carro1 = new Carro(150, 240, 4);
    $carro2 = new Carro(123, 120, 3);
    $carro3 = new Carro(450, 440, 1);
    $carro4 = new Carro(550, 340, 2); 

    // $carro1 = new Carro(rand(1, 1000), rand(1, 1000), rand(1, 4));
    // $carro2 = new Carro(rand(1, 1000), rand(1, 1000), rand(1, 4));
    // $carro3 = new Carro(rand(1, 1000), rand(1, 1000), rand(1, 4));
    // $carro4 = new Carro(rand(1, 1000), rand(1, 1000), rand(1, 4));

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 22 de PHP - Classes parte 3</title>
    </head>
    <body>
        
    </body>
</html>
