<html>
    <head>
        <title> Página teste </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>

        <?php
            session_start();
            if(!(isset($_SESSION['usuario']))){
                echo "<script> location.href='../login/index.php' </script>";
            }
        ?>

        <?php //número de acessos
            /*$arquivo = "contador.txt";
            if(file_exists($arquivo)){
                $fd = fopen($arquivo, "r");
                $valor_atual = chop(fgets($fd));
                fclose($fd);
                $valor_atual++;
            }else $valor_atual = 1;
                $ponteiro = fopen($arquivo, "w");
                fwrite($ponteiro, $valor_atual);
                fclose($ponteiro);*/
        ?>


        <?php //gerar logs
            /*$arquivo = "log.txt";
            $dt = date ("d/m/Y");
            $num = $_SERVER['REMOTE_ADDR'];
            $cadeira = $_SERVER['HTTP_USER_AGENT'];
            $file = fopen ("term", "a");
            fwrite($file, $valor_atual);
            fclose($file);*/
        ?>


    </head>

    <body>
        <div id="geral">
            <input type="hidden" id="tipoTela" name="tipoTela" value="principal">

            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>

            <script> confMenus();</script>

            <div id="conteudo">
                <div id="container-cadastro">
                    <h1> “Com grandes poderes, vêm grandes responsabilidades.” – Stan Lee / Tio Ben. </h1>
                </div>
            </div>
            <?php include '../includes/rodape.html'?>
        </div>
    
       

    </body>
</html>