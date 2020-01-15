<?php
    include_once '../../back-end/conexao.class.php';
    $banco = new Database();
    session_start();

    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        $user=$_POST['usuario'];
        $senha = $_POST['senha'];
        $custo = "08";
        $sal = "dsa387iufhdOisfj";
        
        $hash = hash('sha256', $sal.$senha);

        $status=$banco->verificaLogin($user, $hash);
        if($status){//login correto
            $_SESSION['usuario'] = $user;
            echo "<script type='text/javascript'>";
            echo "location.href = '../../front-end/principal/index.php'";   
            echo "</script>";
        }else{//login incorreto
            echo "<script type='text/javascript'>";
            echo "alert('LOGIN OU SENHA INVALIDOS');";
            echo "location.href = 'index.php'";
            echo "</script>";
        }

    }

?>