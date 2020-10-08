<?php

class Usuario extends CI_Controller{
    
    
//    O método construct sempre vai ser executado quando um objeto desta classe for criado
    public function __construct() {
        parent::__construct();
        #carrega a tabela usuário
        $this->load->model("usuario_model", "usuario");
    }
    

    public function adicionar(){
        $this->load->view("usuario/formulario");
    }
    
    public function salvar(){
        #Do usuario model carregado chama o método inserir
        $this->usuario->inserir();
        redirect(site_url("usuario/index"));
    }
    
    public function index(){
        //buscar os dados do banco de dados por meio do modelo
        $resultado = $this->usuario->obterTodos();
        
        $vetor["usuarios"] = $resultado;
        $vetor["titulo"] = "Usuários cadastrados no banco de dados";
        
        $this->load->view("usuario/lista", $vetor);
    }
    
    public function excluir($codigo){
        $this->usuario->deletar($codigo);
        redirect(site_url("usuario/index"));
    }
    
    public function form_edit($codigo){
        $vetor["usuario"] = $this->usuario->pegarUsuarioPorId($codigo);
        $this->load->view("usuario/form_edit", $vetor);
    }
    
    public function atualizar(){
        $this->usuario->update();
        redirect(site_url("usuario/index"));
    }
    
}