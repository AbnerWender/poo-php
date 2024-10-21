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
    public $livrosEmprestados;
    
    const MAX_EMPRESTIMO = 2;
    
    public function __construct($nome, $email, $senha, $livrosEmprestados){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->livrosEmprestados = $livrosEmprestados;
    }

    public function Create(){
        echo "Usuario: ".$this->nome." criado";
    }

    public function Read(){
        echo "Usuario: ".$this->nome.".";
    }

    public function Update(){
        echo "Usuario: ".$this->nome." atualizado";
    }

    public function Delete(){
        echo "Usuario: ".$this->nome." deletado";
    }

    public function pegarEmprestado($livro){

    }

    public function Devolver(){

    }

}

class Livro implements Crud{
    public $titulo;
    public $autor;
    public $isbn;
    public $genero;
    public $status = "Disponivel"

    public function __construct($titulo, $autor, $isbn, $genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->genero = $genero;
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


//     public function Emprestimo(){
        
//     }

//     public function Create(){
//         echo "Titulo: ".$this->titulo.", Autor: ".$this->autor.", Isbn: ".$this->isbn.", Gênero: ".$this->genero;
//     }
// 
}

class Biblioteca{

}


$usuario = new Usuario("Abner Wender", "eusoulindo@gmail", "123456");
$livro = new Livro("Dom casmurro", "Machado de Assis", "Romance", "4896257");


var_dump($usuario);
echo "<hr>";
var_dump($livro);











?>