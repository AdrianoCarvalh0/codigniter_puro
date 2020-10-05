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
    
}
