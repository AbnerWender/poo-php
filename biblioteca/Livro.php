<?php

require 'main.php';

class Livro implements Crud{
    public $titulo;
    public $autor;
    public $genero;
    public $status_livro = "Disponível";
    public $usuario;

    public function __construct($titulo, $autor, $genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
    }

    public function emprestar($usuario){
        if($this->status_livro != "Disponível"){
            return throw new Exception("ja ta emprestado!!");
        }
        $this->status_livro = "Indisponível";
        $this->usuario = $ususario;
    }  

    public function devolver(){
        if($this->status_livro == "Disponível"){
            return throw new Exception("ja to aq");
        }
        $this->status_livro = "Disponível";
        $this->usuario = null;
    }

    public function create(){
        return $query = 'insert into livro(titulo, autor, genero, status_livro) values("'.$this->titulo.'","'.$this->autor.'","'.$this->genero.'","'.$this->status_livro.'");';
    }

    public function read(){
        return "select * from livro where titulo = ".$this->titulo.";";
    }

    public function update($valores){
        $query = "update livro set ";
        $colunasArray = array_keys($valores);

        for($contador = 0; $contador < count($valores); $contador++){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores)-1) ? $coluna . ' = "'. $valor.'", ' :$coluna .' ="'.$valor.'" ';
        }
        return $query .= 'where titulo = "'.$this->titulo.'";';
    }

    public function delete(){
        return $query = 'delete * from livro where titulo = "'.$this->titulo.'";';
    }
}
?>