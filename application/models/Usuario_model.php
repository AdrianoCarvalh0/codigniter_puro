<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Usuario_model extends CI_Model {
    
    var $nome;
    var $login;
    var $senha;
    
    public function inserir(){
//        A variável local rece o post da variável com nome "nome".
        $this->nome = $this->input->post("nome");
        $this->login = $this->input->post("login");
        $this->senha = $this->input->post("senha");
//        O database é o que foi colocado no autoload, para ser carregado automaticamente
        #o $this serve para falar que são todos os dados que vão ser passados para a tabela usuário
        $this->db->insert("usuario", $this);
    }
    
    public function obterTodos(){
        //retorna o resultado, ou seja pega todos os usuaŕios 
        return $this->db->get("usuario")->result();
    }
    
    public function deletar($codigoUsuario){
        $this->db->where("idusuario", $codigoUsuario);
        //chama a função delete do banco de dados. Deste banco de dados, chame a função delete e passe o $codigoUsuario para a tabela usuário
        $this->db->delete("usuario");
    }
    
    public function pegarUsuarioPorId($id){
        $this->db->where("idusuario", $id);
        //retorna o usuário que tenha o idusuario = $id e faz um get, passando apenas uma linha
        return $this->db->get("usuario")->row();        
    }
    
    public function update(){
        $this->nome = $this->input->post("nome");
        $this->login = $this->input->post("login");
        $this->senha = $this->input->post("senha");
        //este campo código é o que está vindo do post do formulário, o campo name
        $idusuario = $this->input->post("codigo");
        $this->db->where("idusuario", $idusuario);
        $this->db->update("usuario", $this);
    }
    
}
