
<div id="container-cadastro">
<form action="#" method="POST">
        
        <label for="exampleInputEmail1">Campo de busca</label>
        <select id="colunaAtivoDeRede" name="colunaAtivoDeRede" class="form-control">
            <option value="todos">Todos</option>
            <!--<option value="id">Patrimônio</option>-->
            <option value="descricao">Descrição</option>
            <option value="mac">MAC</option>
            <!--<option value="responsavel">Responsável</option>-->
            <!--<option value="idLocal">ID Local</option>-->
        </select>
        
        <br>

        <div class="form-group">
            <input type="text" class="form-control" id="busca" name="busca" placeholder="Campo de Busca" onkeyup="showHintAtivoDeRede(this.value)">
        </div>



        <!--<button type="submit" name="btConsultar" class="btn btn-success btn-block">Consultar</button>-->

        <!--ajax-->
        <script>
            function showHintAtivoDeRede(str) {
                var xhttp;
                var coluna = document.getElementById("colunaAtivoDeRede").value;

                if (str.length == 0) {
                    document.getElementById("txtHintAtivoDeRede").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) { // 4:requisição completada e 200:”Ok”
                        document.getElementById("txtHintAtivoDeRede").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "../../back-end/gethint.php?q="+str+"&tipo=ativoDeRede&coluna="+coluna, true);
                xhttp.send();
            }
        </script>

        <span id="txtHintAtivoDeRede"></span>

    </form>
    
</div>
