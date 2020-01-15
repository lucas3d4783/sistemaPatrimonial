<html>
    <head>
        <title> Acesso ao Sistema </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link id="iconeDaAba" rel="shortcut icon" href="../img/chave.png" >
        <meta charset="UTF-8"/>
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
                echo "<script type='text/javascript'>";
                echo "location.href = '../principal/index.php'";
                echo "</script>";
            }
        ?>
    </head>

    <body>
    
    
        <div id="container-login">
            <form action='./verificaLogin.php' method='POST'>
                <h2>Acesso ao Sistema</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuário</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Entrar</button>

                <!--<a href="#"><p>Esqueceu a senha?</p></a>-->
           
            </form>
        </div>
    </body>
</html>