<?php
    include_once '../conexao.class.php';
    $banco = new Database();

    if($_POST['nome'] && $_POST['complemento']){
        $campos = "'" . $_POST['nome'] ."'" . ", '" . $_POST['complemento'] . "'";
        if($banco->inserir("local", "nome, complemento", $campos)){
            echo "Dados inseridos Corretamente";
        }else{
            echo "Erro ao inserir no banco!";    
        }
        $banco->__destruct();
        echo "<script>
        location.href='../../front-end/alteracao/patrimonio.php';
        </script>";
        
    }else{
        echo "<script>
        alert('Verifique se todos os campos foram preenchidos');
        location.href='../../front-end/alteracao/patrimonio.php';
        </script>";
    }
    
    
?>

