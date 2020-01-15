
<?php
    include_once '../conexao.class.php';
    $banco = new Database();
    
    
        if(isset($_POST['responsavelSelecionado'])){
            if(isset($_POST['btAlterar'])){
                if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cpf'])){
        
                    $id=$_POST['responsavelSelecionado'];
                    $nome = "'{$_POST['nome']}'";
                    $sobrenome = "'{$_POST['sobrenome']}'";
                    $cpf = "'{$_POST['cpf']}'";
                    //var_dump($_POST);
                    
        
                    if($nome!="''"){
                        $banco->alterar('responsavel', $id, 'nome', $nome);
                    }
                    if($sobrenome!="''"){
                        $banco->alterar('responsavel', $id, 'sobrenome', $sobrenome);
                    }
                    if($cpf!="''"){
                        $banco->alterar('responsavel', $id, 'cpf', $cpf);
                    }
                    

                    echo "<script>location.href='../../front-end/alteracao/patrimonio.php';</script>";
                    
                }else{
                    echo "<script> alert(Todos os campos devem ser preenchidos); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
                }
                
            }else if(isset($_POST['btRemover'])){
                $id=$_POST['responsavelSelecionado'];
                $banco->deletarPorId('responsavel', $id);
                echo "<script> location.href='../../front-end/alteracao/patrimonio.php'; </script>";
            }
        }else{
            echo "<script> alert(Não foi encontrado nenhum ativo de rede!); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
        }
    

    $banco->__destruct();
    

?>


