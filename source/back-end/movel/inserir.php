<?php
    include_once '../conexao.class.php';

    $banco = new Database();
    var_dump($_POST);
    if(isset($_POST['descricao']) && isset($_POST['responsavelSelecionado']) && isset($_POST['localSelecionado']) 
    && isset($_POST['largura']) && isset($_POST['altura']) && isset($_POST['peso']) ){
        $idLocal = $_POST['localSelecionado'];
        $idResponsavel = $_POST['responsavelSelecionado'];
        $descricao = $_POST['descricao'];
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        var_dump($_POST);
        
        $campos = "'$descricao', $idResponsavel, $idLocal, $largura, $altura, $peso";
        if($banco->inserir("movel", "descricao, idResponsavel, idLocal, largura, altura, peso", $campos)){
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

