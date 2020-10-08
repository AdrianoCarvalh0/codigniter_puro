<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h1>Formulário do Atualização usuário</h1>
        <hr>
<!--        envia dados para a função salvar do controlador usuário-->
        <form method="post" action="<?= site_url("usuario/atualizar") ?>">
            
            <input type="hidden" name="codigo" value="<?= $usuario->idusuario ?>"/>
            
            <label>Nome: </label><br/>
            
            <input type="text" name="nome" value="<?= $usuario->nome ?>"><br/>
            
            <label>Login: </label><br/>
            
            <input type="text" name="login" value="<?= $usuario->login ?>"><br/>
            
            <label>Senha: </label><br/>
            
            <input type="password" name="senha" value="<?= $usuario->senha ?>"><br/>
            
            <button type="submit" >Atualizar</button>
            
        </form>
    </body>
</html>