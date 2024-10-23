<?php
interface Crud{
    public function Create();
    public function Read();
    public function Update();
    public function Delete();
}

class Usuario implements Crud{

    public $nome;
    public $email;
    public $senha;
    public $livrosEmprestados = [];
    
    const MAX_EMPRESTIMO = 2;
    
    public function __construct(){
       return criar($nome, $email, $senha);
    }

    public function pegarEmprestado($livro){
        if(count($this->livrosEmprestados) < self::MAX_EMPRESTIMO){
            array_push($this->livrosEmprestados, $livro);
            return;
        }
    }
    
    public function devolverEmprestimo($livro){
        if(in_array($livro, $this->livrosEmprestados)){
            $position = array_search($livro,$this->livrosEmprestados);
            unset($this->livrosEmprestados[$position]);
        }
    }

    public function criar($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        return "insert into usuario(nome,email,senha) values (".$this->nome.", ".$this->email.", ".$this->senha.");";
    }

    public function ler(){
        return 
    }

    public function Update(){
        echo "Usuario: ".$this->nome." atualizado";
    }

    public function Delete(){
        echo "Usuario: ".$this->nome." deletado";
    }
    


}

class Livro implements Crud{
    public $titulo;
    public $autor;
    public $isbn;
    public $genero;
    public $status;
    public $usuario;

    public function __construct($titulo, $autor, $isbn, $genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->genero = $genero;
    }

    public function emprestar($usuario){
        if($this->status != "Disponivel"){
            echo"ja ta emprestado";
            return;
        }
        $this->status ="Indisponivel";
        $this->usuario = $usuario;
    }

    public function devolver(){
        if($this->status == "Disponivel"){
            echo"Ja ta aq";
            return;
        }
        $this->status = "Disponivel";
        $this->usuario = null;
    }
    
    public function Create(){
        echo "Titulo: ".$this->titulo." criado";
    }

    public function Read(){
        echo "Titulo: ".$this->titulo.".";
    }

    public function Update(){
        echo "Titulo: ".$this->titulo." atualizado";
    }

    public function Delete(){
        echo "Titulo: ".$this->titulo." deletado";
    }


}

class Biblioteca{

}


$usuario = new Usuario("Abner Wender", "eusoulindo@gmail", "123456");
$livro = new Livro("Dom casmurro", "Machado de Assis", "Romance", "4896257");


var_dump($usuario);
echo "<hr>";
var_dump($livro);











?>