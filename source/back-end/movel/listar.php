<?php
    include_once '../../back-end/conexao.class.php';
    $banco = new Database();

    function getListaMovel(){
        $con = new Database();
        $resultado = $con->listar('movel');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Descrição: {$r['descricao']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }

?>