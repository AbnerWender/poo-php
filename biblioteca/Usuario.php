<?php

class Usuario{
    protected $nome;
    protected $cep;
    protected $livros_emprestados = [];
    const MAX_EMPRESTIMO = 3;

    public function __construct($usuario){
        $this->nome = $usuario['nome'];
        $this->cep = $usuario['cep'];
    }
    
    public function emprestar($livro){
        if(count($this->livros_emprestados) < self::MAX_EMPRESTIMO){
            array_push($this->livros_emprestados, $livro);
            return;
        }
    }

    public function devolver($livro){
        if(in_array($livro, $this->livros_emprestados)){
            $posicao = array_search($livro, $this->livros_emprestados);
            unset($this->livros_emprestados[$posicao]);
        }
    }

    public function create(){
        return "insert into usuario(nome, cep) values(".$this->nome.",".$this->cep.");";
    }

    public function read(){
        return "select * from usuario where nome = ".$this->nome.";";
    }
    
    public function upfate($nome_atualizado){
        return "update usuario set nome = ".$nome_atualizado." where nome = ".$this->nome.";";
    }

    public function delete(){
        return "delete nome from usuario where = ".$this->nome.";";
    }
}
?>