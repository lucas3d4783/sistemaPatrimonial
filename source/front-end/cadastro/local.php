<html>
    <head>
        <title> Cadastro de Local </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>
    </head>
    <?php
        session_start();
        if(!isset($_SESSION['usuario'])){
            echo "<script> location.href='../login/index.php' </script>";
        }
    ?>
    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="cadastrar">
        <input type="hidden" id="tela" name="tela" value="local">
        <div id="geral">
            
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script> confMenus();</script>

            <div id="conteudo">
                <div id="container-cadastro">
                    <form action='../../back-end/local/inserir.php' method="post">
                        <h2>Cadastro</h2>
                        
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label>Complemento</label>
                            <input type="text" class="form-control" name="complemento" placeholder="Sala, Prédio, número, etc.">
                        </div>

                        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>

                        
                
                    </form>
                </div>
                 
            </div>
            <?php include '../includes/rodape.html'?>
        </div>
    
       

    </body>
</html>