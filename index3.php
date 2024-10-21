<?php

abstract Class Veiculos{

    abstract public function Acelerar();
    abstract public function Freiar();

}

Class Barco extends Veiculos{
    public function Acelerar(){
        echo "Empurra a alavanca";
    }

    public function Freiar(){
        echo "Puxa a alavanca";
    }
}

Class Aviao extends Veiculos{
    public function Acelerar(){
        echo "Empurra a alavanca";
    }

    public function Freiar(){
        echo "Puxa a alavanca";
    }
}

Class Carro extends Veiculos{
    public function Acelerar(){
        echo "Pisa no acelerador";
    }

    public function Freiar(){
        echo "Pisa no freio";
    }
}

Class Bicicleta extends Veiculos{
    public function Acelerar(){
        echo "Pedalando";
    }

    public function Freiar(){
        echo "Aperta a manete";
    }
}

Class Skate extends Veiculos{
    public function Acelerar(){
        echo "Remando com o pé";
    }

    public function Freiar(){
        echo "Pisa atras e trava";
    }
}

Class Moto extends Veiculos{
    public function Acelerar(){
        echo "Acelera com a mão";
    }

    public function Freiar(){
        echo "Pisa no freio";
    }
}

Class Elevador extends Veiculos{
    public function Acelerar(){
        echo "Escolhe o botão do andar";
    }

    public function Freiar(){
        echo "Fica parado";
    }
}

$barco = new Barco();
$barco->Acelerar();
echo "<br>";
$barco->Freiar();
echo "<hr>";

$aviao = new Aviao();
$aviao->Acelerar();
echo "<br>";
$aviao->Freiar();
echo "<hr>";

$carro = new Carro();
$carro->Acelerar();
echo "<br>";
$carro->Freiar();
echo "<hr>";

$bicicleta = new Bicicleta();
$bicicleta->Acelerar();
echo "<br>";
$bicicleta->Freiar();
echo "<hr>";

$skate = new Skate();
$skate->Acelerar();
echo "<br>";
$skate->Freiar();
echo "<hr>";

$moto = new Moto();
$moto->Acelerar();
echo "<br>";
$moto->Freiar();
echo "<hr>";

$elevador = new Elevador();
$elevador->Acelerar();
echo "<br>";
$elevador->Freiar();
echo "<hr>";

?>