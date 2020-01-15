<html>
    <head>
        <title> Alteração de Local </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>

        <?php
            session_start();
            if(!isset($_SESSION['usuario'])){
                echo "<script> location.href='../login/index.php' </script>";
            }
        ?>

        
        <!--ajax-->
        <script>
            function showHint(str) {
                var xhttp;
                var coluna = document.getElementById("coluna").value;

                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) { // 4:requisição completada e 200:”Ok”
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "../../back-end/gethint.php?q="+str+"&tipo=local&coluna="+coluna, true);
                xhttp.send();
            }
        </script>


       
        
    </head>

    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="consultar">
        <input type="hidden" id="tela" name="tela" value="local">
        <div id="geral">
            
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script> confMenus();</script>

            <div id="conteudo">
                <div id="container-cadastro">

                    <form action="#" method="POST">
                        
                        <label>Filtrar por</label>
                        <select id="coluna" name="coluna" class="form-control">
                            <option value="todos">Todos</option>
                            <option value="nome">Nome</option>
                            <option value="complemento">Complemento</option>
                        </select>
                        
                        <br>

                        <div class="form-group">
                            <input type="text" class="form-control" id="busca" name="busca" placeholder="Campo de Busca" onkeyup="showHint(this.value)">
                        </div>


                        <!--<button type="submit" name="btConsultar" class="btn btn-success btn-block">Consultar</button>-->

                    </form>

                    <span id="txtHint"></span>

                   

                </div>
                 
            </div>
            <?php include '../includes/rodape.html'?>
        </div>
    
       

    </body>
</html>