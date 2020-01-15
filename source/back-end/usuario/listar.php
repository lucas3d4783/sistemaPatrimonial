<?php
    include_once '../../back-end/conexao.class.php';
    $banco = new Database();
    
    function getListaUsuario(){
        $con = new Database();
        $resultado = $con->listar('usuario');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Nome: {$r['nome']} {$r['sobrenome']} - Usuário: {$r['usuario']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }



?>