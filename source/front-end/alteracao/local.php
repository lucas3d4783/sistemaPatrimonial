<html>
    <head>
        <title> Cadastro de Local </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>
        <?php
            session_start();
            if(!isset($_SESSION['usuario'])){
                echo "<script> location.href='../login/index.php' </script>";
            }
        ?>
        <?php
            include_once '../../back-end/local/listar.php';
        ?>
    </head>
    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="alterar">
        <input type="hidden" id="tela" name="tela" value="local">
        <div id="geral">
            
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script> confMenus();</script>

            <div id="conteudo">
                <div id="container-cadastro">
                    <form action='../../back-end/local/alterar.php' method="post">
                        <h2>Alteração</h2>
                        <label>Local</label>
                        <select name="localSelecionado" id="localSelecionado" class="form-control">
                            <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                            <?php 
                                echo getListaLocais();
                            ?>
                        </select>
                        <br>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label>Complemento</label>
                            <input type="text" class="form-control" name="complemento" placeholder="Sala, Prédio, número, etc.">
                        </div>

                        <button type="submit" name="btAlterar" class="btn btn-success btn-block">Salvar</button>
                        <button type="submit" name="btRemover" class="btn btn-danger btn-block">Remover</button>

                        
                
                    </form>
                </div>
                 
            </div>
            <?php include '../includes/rodape.html'?>
        </div>
    
       

    </body>
</html>