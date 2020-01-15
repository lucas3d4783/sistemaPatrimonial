
<?php
    include_once '../conexao.class.php';
    $banco = new Database();
    
    
        if(isset($_POST['usuarioSelecionado'])){
            if(isset($_POST['btAlterar'])){
                if(isset($_POST['nome']) && isset($_POST['senha1']) && isset($_POST['senha2']) && isset($_POST['sobrenome']) 
                && isset($_POST['email']) && isset($_POST['usuario'])){
                    
                    //var_dump($_POST);

                    if($_POST['senha1'] == $_POST['senha2']){
                        $senha = $_POST['senha1'];
                    }else{
                        echo "<script>alert('As senhas devem ser iguais')</script>";
                        echo "<script>href='../alteracao/usuario.php';</script>";
                    }
                    
                    $id=$_POST['usuarioSelecionado'];
                    $custo = "08";
                    $sal = "dsa387iufhdOisfj";
                    $hash = $hash = hash('sha256', $sal.$senha);
                    $nome = "'{$_POST['nome']}'";
                    $sobrenome = "'{$_POST['sobrenome']}'";
                    $usuario = "'{$_POST['usuario']}'";
                    $email= "'{$_POST['email']}'";
                    $senha="'$hash'";
                    
        
                    if($nome!="''"){
                        $banco->alterar('usuario', $id, 'nome', $nome);
                    }
                    if($sobrenome!="''"){
                        $banco->alterar('usuario', $id, 'sobrenome', $sobrenome);
                    }
                    if($usuario!="''"){
                        $banco->alterar('usuario', $id, 'usuario', $usuario);
                    }
                    if($_POST['senha1'] != "" && $_POST['senha2'] != ""){
                        $banco->alterar('usuario', $id, 'senha', $senha);
                    }
                    if($email!="''"){
                        $banco->alterar('usuario', $id, 'email', $email);
                    }

                    
                    echo "<script>location.href='../../front-end/alteracao/patrimonio.php';</script>";
                    
                }else{
                    echo "<script> alert(Todos os campos devem ser preenchidos); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
                }
                
            }else if(isset($_POST['btRemover'])){
                $id=$_POST['usuarioSelecionado'];
                $banco->deletarPorId('usuario', $id);
                echo "<script> location.href='../../front-end/alteracao/patrimonio.php'; </script>";
            }
        }else{
            echo "<script> alert(Não foi encontrado nenhum ativo de rede!); 
                    location.href='../../front-end/alteracao/patrimonio.php';</script>";
        }
    

    $banco->__destruct();
    

?>


