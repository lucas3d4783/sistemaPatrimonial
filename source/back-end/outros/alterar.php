

<?php
    include_once '../conexao.class.php';
    $banco = new Database();
    
    
        if(isset($_POST['outrosSelecionado'])){
            if(isset($_POST['btAlterar'])){
                if(isset($_POST['descricao']) && isset($_POST['responsavelSelecionado']) && isset($_POST['localSelecionado'])){
        
                    $id=$_POST['outrosSelecionado'];
                    $idLocal = $_POST['localSelecionado'];
                    $idResponsavel = $_POST['responsavelSelecionado'];
                    $descricao = "'{$_POST['descricao']}'";
                    //var_dump($_POST);
                    
        
                    if($descricao!="''"){
                        $banco->alterar('outros', $id, 'descricao', $descricao);
                    }
                    if($idLocal!=""){
                        $banco->alterar('outros', $id, 'idLocal', $idLocal);
                    }
                    if($idResponsavel!=""){
                        $banco->alterar('outros', $id, 'idResponsavel', $idResponsavel);
                    }

                    echo "<script> location.href='../../front-end/alteracao/patrimonio.php';</script>";
                    
                }else{
                    echo "<script> alert(Todos os campos devem ser preenchidos); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
                }
                
            }else if(isset($_POST['btRemover'])){
                $id=$_POST['outrosSelecionado'];
                $banco->deletarPorId('outros', $id);
                echo "<script> location.href='../../front-end/alteracao/patrimonio.php'; </script>";
            }
        }else{
            echo "<script> alert(Não foi encontrado nenhum ativo de rede!); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
        }
    

    $banco->__destruct();
    

?>