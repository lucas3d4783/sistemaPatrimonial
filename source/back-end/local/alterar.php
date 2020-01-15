
<?php
    include_once '../conexao.class.php';
    $banco = new Database();
    
    
        if(isset($_POST['localSelecionado'])){
            if(isset($_POST['btAlterar'])){
                if(isset($_POST['nome']) && isset($_POST['complemento'])){
        
                    $id=$_POST['localSelecionado'];
                    $nome = "'{$_POST['nome']}'";
                    $complemento = "'{$_POST['complemento']}'";
                    //var_dump($_POST);
                    
        
                    if($nome!="''"){
                        $banco->alterar('local', $id, 'nome', $nome);
                    }
                    if($complemento!="''"){
                        $banco->alterar('local', $id, 'complemento', $complemento);
                    }
                    

                    echo "<script>location.href='../../front-end/alteracao/patrimonio.php';</script>";
                    
                }else{
                    echo "<script> alert(Todos os campos devem ser preenchidos); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
                }
                
            }else if(isset($_POST['btRemover'])){
                $id=$_POST['localSelecionado'];
                $banco->deletarPorId('local', $id);
                echo "<script> location.href='../../front-end/alteracao/patrimonio.php'; </script>";
            }
        }else{
            echo "<script> alert(Não foi encontrado nenhum ativo de rede!); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
        }
    

    $banco->__destruct();
    

?>


