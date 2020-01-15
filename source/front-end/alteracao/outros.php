<div id="container-cadastro">
    
    <form action='../../back-end/outros/alterar.php' method='POST'>
        <h2>Alteração</h2>
        <label>Patrimônio genérico</label>
        <select name="outrosSelecionado" id="outrosSelecionado" class="form-control">
            <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
            <?php 
                echo getListaOutros();
            ?>
        </select>
        <br>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" 
            name="descricao" placeholder="Breve descrição do ativo">
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
        <button type="submit" name="btAlterar" class="btn btn-success btn-block">Salvar</button>
        <button type="submit" name="btRemover" class="btn btn-danger btn-block">Remover</button>

    </form>
</div>
