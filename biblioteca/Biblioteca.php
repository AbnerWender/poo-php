<?php

class Biblioteca{
    const servidor = 'localhost';
    const usuario = 'root';
    const senha = '';
    const banco_de_dados = 'biblioteca';

    public static function emprestar($livro, $usuario){
        try{
            $livro->emprestar($usuario);
            $usuario->emprestar($livro);
        } catch(Exception $e){
            echo "<script>alert('".$e->getMessage()."')";
        }
    }

    public static function devolver($livro, $usuario){
        try{
            $livro->devolver();
            $usuario->devolver($livro);
        } catch(Excption $e){
            echo "<script>alert('".$e->getMessage()."')";
        }
    }

    public static function conexao(){
        return $conexao = mysqli_connect(self::servidor, self::usuario, self::senha, self::banco_de_dados);
    }

    public static function cadastrarLivro($livro){
        self::conexao()->query($livro->create());
        self::conexao()->close();
    }

    public static function atualizarLivro($livro, $valores){
        self::conexao()->query($livro->update($valores));
        self::conexao()->close();
    }
}
?>