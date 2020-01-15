<?php

    include_once '../../back-end/conexao.class.php';
    $banco = new Database();
    

    function getListaResponsaveis(){
        $con = new Database();
        $resultado = $con->listar('responsavel');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Nome: {$r['nome']} {$r['sobrenome']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }




?>