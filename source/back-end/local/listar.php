<?php
    include_once '../../back-end/conexao.class.php';
    $banco = new Database();

    

    
    function getListaLocais(){
        $con = new Database();
        $resultado = $con->listar('local');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Nome: {$r['nome']} - Complemento: {$r['complemento']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }

?>