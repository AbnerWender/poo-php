<?php

require "Livro.php";
require "Usuario.php";
require "Biblioteca.php";

use Livro as Livro;
use Usuario as Usuario;


$dom_casmurro = new livro("Dom casmurro", "Machado de Assis", "Romance");

Biblioteca::cadastrarLivro($dom_casmurro);



?>