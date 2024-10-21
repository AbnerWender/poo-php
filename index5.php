<?php

class Abner{
    public static $nome;

    public static function getNome(){
        echo self::$nome;
    }

    public function exibirNome(){
        echo self::$nome;
    }
}

Abner::$nome = "Abner";
Abner::getNome();
echo "<br>";
$abner = new Abner();
$abner->exibirNome();