<?php

class Veiculo{
    public $marca;
    public $modelo;
    public $cor;
    public $ano;
    
    public function __construct($marca, $modelo, $cor, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }
    
    
    public function Ligar(){
        echo $this->marca . " ligou";
    }
    
    public function Desligar(){
        echo $this->marca . " desligou";
    }
    
    public function Acelerar(){
        echo $this->marca . " R de rapidãooooooo";
    }
    
    public function Frear(){
        echo $this->marca . " Freiiaaaaaaa";
    }
}
    
    class Carro extends Veiculo{
        
        public function abrirPorta(){
            echo "Abrir porta";
        }
    }

   
    class Moto extends Veiculo{
        public function darGrau(){
            echo "tampa placaaa";
        }

    }
      

    $golG7 = new Carro("Volksvagem", "Gol 1.0", "Branco", "2023");
    $xre = new Moto("Honda", "Xre 190", "Preto", "2024");

    $golG7->abrirPorta();
    $golG7->Desligar()
    
?>