<?php
    include_once '../../back-end/conexao.class.php';
    $banco = new Database();

    
    function getListaAtivoDeRede(){
        $con = new Database();
        $resultado = $con->listar('ativoDeRede');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Descrição: {$r['descricao']} - MAC: {$r['mac']}</option></br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }


?>