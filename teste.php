<?php

    class Pessoa{
         
        public $nome;
        public $idade;
        public $altura;
        public $peso;

        public function __construct($nome, $idade, $altura, $peso){
            $this->idade =$idade;
            $this->altura =$altura;
            $this->peso =$peso;

            $this->setNome($nome);
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }

        public function Andar(){
            echo $this->nome . " andou";
        }

        public function Falar(){
            echo $this->nome . " falou";
        }

        public function Comer(){
            echo $this->nome . " comeu";
        }

        public function Dormir(){
            echo $this->nome . " dormiu";
        }
    }

    $abner = new Pessoa("Abner Wender", 18, 1.76, 56);
    $abner->Dormir();
?>