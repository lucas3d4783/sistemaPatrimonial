<?php // Adicionando novos valores no vetor
    include_once './conexao.class.php';
    $banco = new Database();
    
    $q = $_GET["q"];
    $tabela = $_GET["tipo"];
    $coluna = $_GET["coluna"];
    $hint = "<hr>";
    

    switch($tabela){

        ///////////////////////////////////////////////////////////////////////////
        case "local":
            if($coluna != "todos"){
                $resultado = $banco->selecionarLike($tabela, $coluna, $q);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Nome: {$r['nome']} - Complemento: {$r['complemento']}<br><hr>";
                }
            }else{
                $resultado = $banco->listar($tabela);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Nome: {$r['nome']} - Complemento: {$r['complemento']}<br><hr>";
                }
            }
            
            // Saída é "sem sugestão" se nenhuma dica foi encontrada. Caso contrário, os nome corretos
            echo $hint === "<hr>" ? "Não encontrado!" : $hint;
        break;



        ////////////////////////////////////////////////////////////////////////////
        case "usuario":
            if($coluna != "todos"){
                $resultado = $banco->selecionarLike($tabela, $coluna, $q);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - Usuário: {$r['usuario']} - E-mail: {$r['email']}<br><hr>";
                }
            }else{
                $resultado = $banco->listar($tabela);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - Usuário: {$r['usuario']} - E-mail: {$r['email']}<br><hr>";
                }
            }
            
            // Saída é "sem sugestão" se nenhuma dica foi encontrada. Caso contrário, os nome corretos
            echo $hint === "<hr>" ? "Não encontrado!" : $hint;

        break;


        ///////////////////////////////////////////////////////////////////////////
        case "responsavel":
            if($coluna != "todos"){
                $resultado = $banco->selecionarLike($tabela, $coluna, $q);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - CPF: {$r['cpf']}<br><hr>";
                }
            }else{
                $resultado = $banco->listar($tabela);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - CPF: {$r['cpf']}<br><hr>";
                }
            }
            
            // Saída é "sem sugestão" se nenhuma dica foi encontrada. Caso contrário, os nome corretos
            echo $hint === "<hr>" ? "Não encontrado!" : $hint;


        break;


        //////////////////////////////////////////////////////////////////////////
        case "ativoDeRede":
            if($coluna != "todos"){
                $resultado = $banco->listarAtivosDeRedeParametros($coluna, $q);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Descrição: {$r['descricao']} - MAC: {$r['mac']} - Responsável: {$r['respNome']} {$r['respSobre']} - Local: {$r['locNome']}
                    <br><hr>";
                }
            }else{
                $resultado = $banco->listarAtivosDeRede();
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Descrição: {$r['descricao']} - MAC: {$r['mac']} - Responsável: {$r['respNome']} {$r['respSobre']} - Local: {$r['locNome']}
                    <br><hr>";
                }
            }
            
            // Saída é "sem sugestão" se nenhuma dica foi encontrada. Caso contrário, os nome corretos
            echo $hint === "<hr>" ? "Não encontrado!" : $hint;

        break;
        

        //////////////////////////////////////////////////////////////////////////
        case "movel":
            if($coluna != "todos"){
                $resultado = $banco->listarMovelParametros($coluna, $q);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Descrição: {$r['descricao']} - Largura: {$r['largura']} - Altura: {$r['altura']} - Peso: {$r['peso']} -
                    Responsável: {$r['respNome']} {$r['respSobre']} - Local: {$r['locNome']}
                    <br><hr>";
                }
            }else{
                $resultado = $banco->listarMovel();
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Descrição: {$r['descricao']} - Largura: {$r['largura']} - Altura: {$r['altura']} - Peso: {$r['peso']} -
                    Responsável: {$r['respNome']} {$r['respSobre']} - Local: {$r['locNome']}
                    <br><hr>";
                }
            }
            
            // Saída é "sem sugestão" se nenhuma dica foi encontrada. Caso contrário, os nome corretos
            echo $hint === "<hr>" ? "Não encontrado!" : $hint;

        break;
        

        /////////////////////////////////////////////////////////////////////////
        case "outros":
            
            /* $sql = "SELECT outros.id, outros.descricao, responsavel.nome as respNome, responsavel.sobrenome as respSobre
            , local.nome as locNome FROM outros, responsavel, local WHERE $campo LIKE '%$parametro%' and 
            outros.idResponsavel=responsavel.id and outros.idLocal=local.id"; */

            if($coluna != "todos"){
                $resultado = $banco->listarOutrosParametros($coluna, $q);
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Descrição: {$r['descricao']} - Responsável: {$r['respNome']} {$r['respSobre']} - Local: {$r['locNome']}
                    <br><hr>";
                }
            }else{
                $resultado = $banco->listarOutros();
                foreach($resultado as $r){
                    $hint .= "ID: {$r['id']} - Descrição: {$r['descricao']} - Responsável: {$r['respNome']} {$r['respSobre']} - Local: {$r['locNome']}
                    <br><hr>";
                }
            }
            
            // Saída é "sem sugestão" se nenhuma dica foi encontrada. Caso contrário, os nome corretos
            echo $hint === "<hr>" ? "Não encontrado!" : $hint;
            

        break;


 
    }

?> 