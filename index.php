<?php

    class Usuario{
        //atributos = são caracteristicas que nossos objetos terão
        public $nome;
        public $idade;
        public $email;
        public $senha;
        
        //metodos = ações que nossos objetos poderão executar
        public function Cadastrar(){
            if($this->email == "abner@gmail.com" && $this->senha == "12345"){
                echo "Cadastrado com sucesso";
            }
            else{
                echo "erro ao cadastrar";
            }
        }
    }

    //palavra reservada "new" para criarmos um novo objeto a partir da classe referida 
    $abner = new Usuario();

    $abner->nome = "Abner Wender"; 
    $abner->idade = 18;
    $abner->email = "abner@gmail.com";
    $abner->senha = "12345";

    $abner-> Cadastrar();

 

?>