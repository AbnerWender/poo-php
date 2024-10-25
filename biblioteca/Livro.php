<?php

class Livro{
    public $titulo;
    public $autor;
    public $genero;
    public $status = "Disponível";
    public $usuario;

    public function emprestar($usuario){
        if($this->status != "Disponível"){
            echo "ja ta emprestado";
            return;
        }
        $this->status = "Indisponível";
        $this->usuario = $ususario;
    }  

    public function devolver(){
        if($this->status == "Disponível"){
            echo "ja to aq";
            return;
        }
        $this->status = "Disponível";
        $this->usuario = null;
    }

    public function create(){
        return $query = 'insert into livro(titulo, autor, genero, status_livro) values("'.$this->titulo.'","'.$this->autor.'","'.$this->genero.'","'.$this->status.'");';
    }

    public function read(){
        echo"select * from livro where titulo = ".$this->titulo.";";
    }

    public function atualizar($arrayColunas){
        $query = "update usuario set";

        $arrayColunas = array(
            'titulo' => 'cidade de papel',
            'autor' => 'Agatha crithe',
            'generoo' => 'terror'
        );

        $colunas = array_keys($arrayColunas);

        for($contador = 0; $contador <= count($arrayColunas), $contador++){
            echo $colunas[$contador];

            echo $arrayColunas[$colunas[$contador]]
        }

    }

    public function delete(){
        echo "delete * from livro where titulo = ".$this->titulo.";";
    }
}
?>







