<body>
    <h1>Cadastro de Pessoas</h1>  <br />
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="name">Nome:</label>
        <input type="text"  id="name" name="nome" /> <br />
        <label for="sen">Senha:</label>
        <input type="password" id="sen" name="senha"/> <br />
        <label for="msg">Mensagem:</label>
        <textarea  id="msg" name="mensa"></textarea>  <br />
        <input type="submit" value="Inserir"  name="inserir"
        onclick="document.getElementById('act').value='inserir';">
        <input type="submit" value="Alterar"  name="alterar"
        onclick="document.getElementById('act').value='alterar';">
        <input type="submit" value="Deletar"  name="deletar"
        onclick="document.getElementById('act').value='deletar';">
        <input type="submit" value="Listar"  name="listar"
        onclick="document.getElementById('act').value='listar';">
        <input type="submit" value="Limpar Campos"  name="limpaCampos"
        onclick="document.getElementById('act').value='limpaCampos';">
        
        <input type="hidden" id="act" name="acao" />
    </form>
    <?php
        if(isset($_POST['acao'])){
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            $mensa = $_POST["mensa"];
            function alterar(){
                echo "alterar...";
            }
            function deletar(){
                echo "excluir...";
            }
            function inserir(){
                echo "inserir...";
            }
            function listar(){
                echo "listar...";
            }
            function limpaCampos(){
                echo "limpar campos...";
            }
            switch($_POST['acao']){
                case "inserir":  inserir();
                break;
                case "alterar":  alterar();
                break;
                case "deletar":  deletar();
                break;
                case "listar":  listar();
                break;
                case "limpaCampos":  limpaCampos();
                break;
                default: echo "Nenhuma das opcoes!";
            }
        }
    ?>
</body> 
