<?php

class Carro {
    public $tipo; // 1=Passeio / 2=Esporte / 3=Utilitário
    public $velMax;
    public $nome;
    public $liga;
    public $vel;

    public function __construct($tp, $no) {
        $this->tipo = $tp;
        $this->liga = false;
        $this->nome = $no;
        $this->vel = 0;

        if ($tp == 1) {
            $this->velMax = 160;
        } else if ($tp == 2) {
            $this->velMax = 300;
        } else {
            $this->velMax = 100;
        }
    }

    public function ligar() {
        $this->liga = true;
    }

    public function desligar() {
        $this->liga = false;
    }

    public function velocidade($vl) {
        if ($vl > $this->velMax) {
            $this->vel = $this->velMax;
        } else {
            $this->vel = $vl;
        }
    }

    public function id() {
        echo "<hr>";
        echo "Nome do carro: " . $this->nome;
        echo "<br>Tipo do carro: " . $this->tipo;
        echo "<br>Velocidade Máxima: " . $this->velMax;
        echo "<br>Velocidade atual: ".$this->vel;
        if ($this->liga) {
            echo "<br>Este carro está LIGADO";
        } else {
            echo "<br>Este carro está DESLIGADO";
        }
    }
}

$carro1 = new Carro(2, "Rapid");
$carro2 = new Carro(3, "Carregador");
$carro3 = new Carro(1, "Basic");
$carro4 = new Carro(2, "Veloz");
$carro5 = new Carro(2, "Flecha");

$carro1->ligar();
$carro3->ligar();
$carro5->ligar();

$carro5->velocidade(200);

$carro3->desligar();



$carro1->id();
$carro2->id();
$carro3->id();
$carro4->id();
$carro5->id();




?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 20 de PHP - Classes parte 1</title>
    </head>
    <body>
        
    </body>
</html>
