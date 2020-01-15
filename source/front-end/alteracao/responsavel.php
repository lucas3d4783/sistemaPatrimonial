<html>
    <head>
        <title> Cadastro de Responsável </title>
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
            include_once '../../back-end/responsavel/listar.php';

        ?>
    </head>

    <body>
        <div id="geral">
            <input type="hidden" id="tipoTela" name="tipoTela" value="alterar">
            <input type="hidden" id="tela" name="tela" value="responsavel"> 

            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>

            <script> confMenus();</script>
            
            <div id="conteudo">
                <div id="container-cadastro">
                    <form action='../../back-end/responsavel/alterar.php' method='POST'>
                        <h2>Alteração</h2>
                        <label>Responsável</label>
                        <select name="responsavelSelecionado" id="responsavelSelecionado" class="form-control">
                            <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                            <?php 
                                echo getListaResponsaveis();
                            ?>
                        </select>
                        <br>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" class="form-control" name="cpf" placeholder="###.###.###-##">
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