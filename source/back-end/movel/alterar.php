

<?php
    include_once '../conexao.class.php';
    $banco = new Database();
    
    
        if(isset($_POST['movelSelecionado'])){
            if(isset($_POST['btAlterar'])){
                if(isset($_POST['descricao']) && isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['largura']) && isset($_POST['responsavelSelecionado']) && isset($_POST['localSelecionado'])){
        
                    $id=$_POST['movelSelecionado'];
                    $idLocal = $_POST['localSelecionado'];
                    $idResponsavel = $_POST['responsavelSelecionado'];
                    $descricao = "'{$_POST['descricao']}'";
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $largura = $_POST['largura'];
                    var_dump($_POST);
                    
        
                    if($descricao!="''"){
                        $banco->alterar('movel', $id, 'descricao', $descricao);
                    }
                    if($idLocal!=""){
                        $banco->alterar('movel', $id, 'idLocal', $idLocal);
                    }
                    if($idResponsavel!=""){
                        $banco->alterar('movel', $id, 'idResponsavel', $idResponsavel);
                    }
                    if($peso!=""){
                        $banco->alterar('movel', $id, 'peso', $peso);
                    }
                    if($altura!=""){
                        $banco->alterar('movel', $id, 'altura', $altura);
                    }
                    if($largura!=""){
                        $banco->alterar('movel', $id, 'largura', $largura);
                    }

                    echo "<script> location.href='../../front-end/alteracao/patrimonio.php';</script>";
                    
                }else{
                    echo "<script> alert(Todos os campos devem ser preenchidos); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
                }
                
            }else if(isset($_POST['btRemover'])){
                $id=$_POST['movelSelecionado'];
                $banco->deletarPorId('movel', $id);
                echo "<script> location.href='../../front-end/alteracao/patrimonio.php'; </script>";
            }
        }else{
            echo "<script> alert(Não foi encontrado nenhum ativo de rede!); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
        }
    

    $banco->__destruct();
    

?>