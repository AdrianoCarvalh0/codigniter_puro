<?php

class Primeiro_controller extends CI_Controller{
    
    
    public function ola(){
        echo "Acessando uma função pelo controlador";
    }
    
    public function digaOla($nome, $alimento){
        echo "Bem vindo $nome, você gosta de $alimento";
    }
    
    public function index(){
        echo "você está acessando o index do primeiro controlador";
    }
    
    
}
    
