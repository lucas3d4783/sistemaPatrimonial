

<?php
    include_once '../conexao.class.php';
    $banco = new Database();
    
    
        if(isset($_POST['ativoDeRedeSelecionado'])){
            if(isset($_POST['btAlterar'])){
                if(isset($_POST['descricao']) && isset($_POST['mac']) && isset($_POST['responsavelSelecionado']) && isset($_POST['localSelecionado'])){
        
                    $id=$_POST['ativoDeRedeSelecionado'];
                    $idLocal = $_POST['localSelecionado'];
                    $idResponsavel = $_POST['responsavelSelecionado'];
                    $descricao = "'{$_POST['descricao']}'";
                    $mac = "'{$_POST['mac']}'";
                    //var_dump($_POST);
                    
        
                    if($descricao!="''"){
                        $banco->alterar('ativoDeRede', $id, 'descricao', $descricao);
                    }
                    if($idLocal!=""){
                        $banco->alterar('ativoDeRede', $id, 'idLocal', $idLocal);
                    }
                    if($idResponsavel!=""){
                        $banco->alterar('ativoDeRede', $id, 'idResponsavel', $idResponsavel);
                    }
                    if($mac!="''"){
                        $banco->alterar('ativoDeRede', $id, 'mac', $mac);
                    }

                    echo "<script> location.href='../../front-end/alteracao/patrimonio.php';</script>";
                    
                }else{
                    echo "<script> alert(Todos os campos devem ser preenchidos); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
                }
                
            }else if(isset($_POST['btRemover'])){
                $id=$_POST['ativoDeRedeSelecionado'];
                $banco->deletarPorId('ativoDeRede', $id);
                echo "<script> location.href='../../front-end/alteracao/patrimonio.php'; </script>";
            }
        }else{
            echo "<script> alert(Não foi encontrado nenhum ativo de rede!); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
        }
    

    $banco->__destruct();
    

?>