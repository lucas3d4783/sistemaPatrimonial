<html>
    <head>
        <title> Cadastro de Patrimônio </title>
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
            include_once '../../back-end/local/listar.php';
            include_once '../../back-end/ativoDeRede/listar.php';
            include_once '../../back-end/outros/listar.php';
            include_once '../../back-end/ativoDeRede/listar.php';
            include_once '../../back-end/movel/listar.php';
        ?>
    </head>

    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="alterar">
        <input type="hidden" id="tela" name="tela" value="patrimonio">

        <div id="geral">
        
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script> confMenus();</script>
            
            <div id="conteudo">
                <div id="escolher">
                    <select id="selecionado" class="form-control" onchange="selecionar()">
                        <option value="0">Nenhum</option>
                        <option value="1">Ativo de Rede</option>
                        <option value="2">Móvel</option>
                        <option value="3">Patrimônio genérico</option>
                    </select>
                </div>
                

                <div id="ativoDeRede">
                    <?php include 'ativoDeRede.php'; ?>
                </div>

                <div id="movel">
                    <?php include 'movel.php'; ?>
                </div>

                <div id="outros">
                    <?php include 'outros.php'; ?>
                </div>
               
            </div>


            <?php include '../includes/rodape.html'?>
        </div>
    
    </body>
</html>