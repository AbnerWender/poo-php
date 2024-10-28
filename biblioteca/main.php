<?php

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

require "Livro.php";
require "Usuario.php";
require "Biblioteca.php";

use Livro as Livro;
use Usuario as Usuario;


$dom_casmurro = new livro("Dom casmurro", "Machado de Assis", "Romance");

Biblioteca::cadastrarLivro($dom_casmurro);
Biblioteca::atualizarLivro($dom_casmurro, [
    'titulo' => '2012 - o fim do mundo',
    'autor' => 'Maias',
    'genero' => 'ficção'
]);


?>