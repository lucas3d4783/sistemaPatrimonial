
<div id="container-cadastro">
    <form action="#" method="POST">
        
        <label>Campo de busca</label>
        <select id="colunaMovel" name="colunaMovel" class="form-control">
            <option value="todos">Todos</option>
            <!--<option value="id">Patrimônio</option>-->
            <option value="descricao">Descrição</option>
            <!--<option value="largura">Largura</option>-->
            <!--<option value="altura">Altura</option>-->
            <!--<option value="peso">Peso</option>-->

        </select>
        
        <br>

        <div class="form-group">
            <input type="text" class="form-control" id="busca" name="busca" placeholder="Campo de Busca" onkeyup="showHintMovel(this.value)">
        </div>



        <!--<button type="submit" name="btConsultar" class="btn btn-success btn-block">Consultar</button>-->


         <!--ajax-->
         <script>
            function showHintMovel(str) {
                var xhttp;
                var coluna = document.getElementById("colunaMovel").value;

                if (str.length == 0) {
                    document.getElementById("txtHintMovel").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) { // 4:requisição completada e 200:”Ok”
                        document.getElementById("txtHintMovel").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "../../back-end/gethint.php?q="+str+"&tipo=movel&coluna="+coluna, true);
                xhttp.send();
            }
        </script>

        <span id="txtHintMovel"></span>

        
    </form>
</div>
