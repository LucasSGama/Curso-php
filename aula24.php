<?php

    class Carro{
        public $cor;
        public static $vel=0;

        public function __construct($cr) {
            $this->cor=$cr;
            self::$vel=0;
        }

        public function mudaVel($vl) {
            self::$vel=$vl;
        }

        public function status() {
            echo "<hr>";
            echo "Cor: ".$this->cor;
            echo "<br>Velocidade: ".self::$vel;
            echo "<br><hr>";
        }
    }

    $car1 = new Carro("Vermelho");
    $car2 = new Carro("Verda");
    $car3 = new Carro("Azul");

    $car1->status();
    $car2->status();
    $car3->status();

    echo "<br>Velocidade alterada<br>";
    $car1->mudaVel(100);

    $car1->status();
    $car2->status();
    $car3->status();

    echo "<br>Velocidade alterada<br>";
    $car1->mudaVel(240);

    $car1->status();
    $car2->status();
    $car3->status();

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 24 de PHP - Classes parte 5</title>
    </head>
    <body>
        
    </body>
</html>
