<?php

class Pessoa{
    const nome = "Abner";

    public function getNome(){
        echo self::nome;
    }
}

$abner = new Pessoa();
echo $abner->getNome();


class Kirkman extends Pessoa{
    const nome = "Tom Kirkman";

    public function getNomeParent(){
        echo parent::nome;
    }
}

$presidente = new Kirkman();
echo $presidente::nome;


?>