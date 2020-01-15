<?php
    include_once '../../back-end/conexao.class.php';
    $banco = new Database();
    
    function getListaOutros(){
        $con = new Database();
        $resultado = $con->listar('outros');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Descrição: {$r['descricao']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }


?>