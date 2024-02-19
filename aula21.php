<?php

    class aula {
        // Private e protected
        protected $var1="Bom dia";
        protected $var2="canalfessorbruno@gmail.com";
        protected $var3="www.webveste.com.br";

        public function escreve() {
            echo "<br>Método da classe Aula";
            echo "<br>".$this->var1;
            echo "<br>".$this->var2;
            echo "<br>".$this->var3;
        }
    }

    // Herança
    class canal extends aula {
        public $vc1="Curso de PHP";
        public $vc2="Bruno";

        public function escreve2() {
            echo "<br>Método da classe canal";
            echo "<br>".$this->vc1;
            echo "<br>".$this->vc2;
            echo "<br>".$this->var1;
            echo "<br>".$this->var2;
            echo "<br>".$this->var3;
        }
    }

    $aulaOBJ= new aula();
    $canalOBJ= new canal();

    $aulaOBJ->escreve();
    echo "<hr>";
    // $canalOBJ->escreve();
    $canalOBJ->escreve2();
    echo "<hr>";

    // echo "<br>".$this->var1;
    // echo "<br>".$this->var2;
    // echo "<br>".$this->var3;

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 21 de PHP - Classes parte 2</title>
    </head>
    <body>
        
    </body>
</html>
