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
<!--        Na visão os índices do vetor se tornam variáveis-->
        <h1><?php echo $titulo ?></h1>
        <hr>
        <a href="<?= site_url("usuario/adicionar") ?>"> Adicionar </a>
        <table border="1" width=100%">
            <tr> 
                <td>Nome</td>
                <td>login</td> 
                <td>Ações</td> 
            </tr>
           
        <?php 
//        Para os usuários como um usuário exiba
        foreach ($usuarios as $usuario){
            echo "<tr>";
            echo "<td>$usuario->nome</td>";
            echo "<td>$usuario->login</td>";
            echo "<td>"            
                    . "<a href= '". site_url("usuario/excluir/$usuario->idusuario") . "'> Excluir </a> "
                    . "<a href= '". site_url("usuario/form_edit/$usuario->idusuario") . "'> Atualizar </a> "
                    . "</td>";            
            echo "<tr>";
        }
            
        // put your code here
        ?>
        </table>    
    </body>
</html>
