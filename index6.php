<?php
interface Info{
    public function getInfo();
}

class Produto implements Info{
    public $nome;
    public $preco;
    public $descricao;
    public $quantidade;

    public function __construct($nome, $preco, $descricao, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
    }

    public function getInfo(){
        echo "Nome: ".$this->nome."Preço: ".$this->preco.", Quantidade: ".$this->quantidade.", Descrição: ".$this->descricao;
    }
}


$camisaCorintia = new Produto("Camisa Corinthians ", 299.5 , "Camisa corinthians 100% poliester ", 20);
echo "<pre>";
var_dump($camisaCorintia);
echo "</pre>";
echo "<br>";
$camisaCorintia->getInfo();


class Usuario implements Info{
    public $nome;
    public $email;
    public $senha;
    public $telefone;

    public function __construct($nome, $email, $senha, $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }

    public function getInfo(){
        echo "Nome: ".$this->nome."Email: ".$this->email.", Senha: ".$this->senha.", Telefone: ".$this->telefone;
    }
}

$presidente = new Usuario("Tom Kirkman ", "casabranca@gmail.us", " 123456", "123 99999985");
echo "<pre>";
var_dump($presidente);
echo "</pre>";
echo "<br>";
$presidente->getInfo();
?>