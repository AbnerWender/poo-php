<?php

class Biblioteca{
    const servidaor = 'localhost';
    const usuario = 'root';
    const senha = '';
    const banco_de_dados = 'biblioteca141';

    public static function emprestar($livro, $usuario){
        $livro->emprestar($usuario);
        $usuario->emprestar($livro);
    }

    public static function devolver($livro, $usuario){
        $livro->devolver();
        $usuario->devolver($livro);
    }

    public static function conexao(){
        return $conexao = mysqli_connect(self::servidor, self::usuario, self::senha, self::banco_de_dados);
    }

    public static function cadastrarLivro($livro){
        self::conexao()->query($livro->create());
        self::conexao()->close();
    }
}
?>