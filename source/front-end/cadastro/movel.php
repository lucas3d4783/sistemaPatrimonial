
<div id="container-cadastro">
    <form action='../../back-end/movel/inserir.php' method='POST'>
        <h2>Cadastro</h2>

        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" class="form-control" 
            name="descricao" placeholder="Breve descrição do ativo">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Largura</label>
            <input type="number" class="form-control" name="largura" placeholder="Largura em centímetros (cm)">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Altura</label>
            <input type="number" class="form-control" name="altura" placeholder="Altura em centímetros (cm)">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Peso</label>
            <input type="number" class="form-control" name="peso" placeholder="Peso em quilogramas (Kg)">
        </div>
        <label>Responsável</label>
        <select name="responsavelSelecionado" id="responsavelSelecionado" class="form-control">
            <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
            <?php 
                echo getListaResponsaveis();
            ?>
        </select>
        <br>
        <label>Local</label>
        <select name="localSelecionado" id="localSelecionado" class="form-control">
            <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
            <?php 
                echo getListaLocais();
            ?>
        </select>
        <br>

        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>

        

    </form>
</div>
