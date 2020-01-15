<?php
   
    include_once '../conexao.class.php';
    $banco = new Database();

    if(isset($_POST['nome']) && isset($_POST['senha1']) && isset($_POST['senha2']) && isset($_POST['sobrenome']) 
    && isset($_POST['email']) && isset($_POST['usuario'])){
        if($_POST['senha1'] == $_POST['senha2']){
            $senha = $_POST['senha1'];
        }else{
            echo "<script>alert('As senhas devem ser iguais')</script>";
            echo "<script>href='../cadastro/usuario.php';</script>";
        }
        
        $custo = "08";
        $sal = "dsa387iufhdOisfj";
        $hash = $hash = hash('sha256', $sal.$senha);
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $usuario = $_POST['usuario'];
        $email= $_POST['email'];
        

        $campos = "'{$_POST['nome']}', '{$_POST['sobrenome']}', '$hash', '{$_POST['usuario']}', '{$_POST['email']}'";
        $banco->inserirUsuario("usuario", "nome, sobrenome, senha, usuario, email", $campos, $usuario);
            
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