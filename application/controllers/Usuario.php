<?php

class Usuario extends CI_Controller{
    
    
//    O método construct sempre vai ser executado quando um objeto desta classe for criado
    public function __construct() {
        parent::__construct();
        #carrega a tabela usuário
        $this->load->model("usuario_model", "usuario");
    }
    

    public function index(){
        $this->load->view("usuario/formulario");
    }
    
    public function salvar(){
        #Do usuario model carregado chama o método inserir
        $this->usuario_model->inserir();
    }
    
    public function listar(){
        //buscar os dados do banco de dados por meio do modelo
        $resultado = $this->usuario->obterTodos();
        $this->load->view("usuario/lista");
    }
    
}
    
