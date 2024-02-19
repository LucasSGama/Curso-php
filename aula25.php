<?php

    // Final, a palavra reservada final, diz que o método não pode ser sobreescrito
    abstract class CarroBase{
        public $cor;
        public $vel=0;

        public function __construct($cr){
            $this->cor=$cr;
        }

        public function status() {
            echo "<br>";
            echo "Carro: ".$this->cor;
            echo "<br>Velocidade: ".$this->vel;
            echo "<br>" ;
        }

            public final function Cor(){
                echo "<hr>";
                echo "<br>Minha cor: ".$this->cor;
                echo "<br>Método original<br>";
            }
            
    }

    class Carro extends CarroBase{

        // public function Cor() {
        //     echo "<hr>";
        //     echo "<br>Cor: ".$this->cor."<hr>";
        // }
    }

    final class Trans extends CarroBase{

    }

    $car = new Carro("Vermelho");
    $tra = new Trans("Azul");

    $car->Cor();
    $tra->Cor();


?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 25 de PHP - Classes parte 6(Final)</title>
    </head>
    <body>
        
    </body>
</html>
