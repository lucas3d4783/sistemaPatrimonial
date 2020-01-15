
<div id="container-cadastro">
<form action="#" method="POST">
        
        <label>Campo de busca</label>
        <select id="colunaOutros" name="colunaOutros" class="form-control">
            <option value="todos">Todos</option>
            <option value="id">Patrimônio</option>
            <option value="descricao">Descrição</option>
        </select>
        
        <br>

        <div class="form-group">
            <input type="text" class="form-control" id="busca" name="busca" placeholder="Campo de Busca" onkeyup="showHintOutros(this.value)">
        </div>
        
         <!--ajax-->
         <script>
            function showHintOutros(str) {
                var xhttp;
                var coluna = document.getElementById("colunaOutros").value;

                if (str.length == 0) {
                    document.getElementById("txtHintOutros").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) { // 4:requisição completada e 200:”Ok”
                        document.getElementById("txtHintOutros").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "../../back-end/gethint.php?q="+str+"&tipo=outros&coluna="+coluna, true);
                xhttp.send();
            }
        </script>

        <span id="txtHintOutros"></span>

    </form>
</div>
