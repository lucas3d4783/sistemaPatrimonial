<?php

    class Database{
        private $hostname="mysql669.umbler.com";
        private $username="lucas.reichert";
        private $password="MySQL123";
	private $dbname="mysql-reichert";
        private $con;
        private $port=41890;
        
        
        function __construct(){
            try{
                $this->con = new PDO("mysql:host=$this->hostname;
                                        port=$this->port;
                                        dbname=$this->dbname",
                                        "$this->username",
                                        "$this->password");
                $this->con->exec("set names utf8");
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        function __destruct(){
            $this->hostname=null;
            $this->username=null;
            $this->password=null;
            $this->dbname=null;
            $this->con=null;
        }
        
        
        
        function inserir($tabela, $campos, $valores){
            $sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";
            try{
                $linhas = $this->con->exec($sql);

                if($linhas == 0){
                    echo "<script> alert('Erro ao inserir'); </script>";
                
                }else if($linhas == 1){
                    echo "<script> alert('$tabela inserido com sucesso(a)'); </script>";
                    return true;
                }
                
            }catch(PDOException $e){
                echo $e->getMessage();
                echo "<script> alert('Erro ao inserir'); </script>";
                return false;
            }
        }

        function inserirUsuario($tabela, $campos, $valores, $usuario){

            try{
                $sql = "SELECT count(*) as contador FROM usuario WHERE usuario='$usuario'";
                $resultado = $this->con->query($sql);
                foreach($resultado as $r){
                    if($r['contador'] != 0){
                        echo "<script> alert('Este usuário já está em uso');
                        location.href = '../../../front-end/cadastro/usuario.php';</script>";
                        
                        return false;
                    }else{
                        $sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";
                    }
                }
                
                $linhas = $this->con->exec($sql);
                
                if($linhas == 1){
                    echo "<script> alert('$tabela inserido com sucesso(a)'); </script>";
                }

                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                echo "<script> alert('Erro ao inserir'); </script>";
                return false;
            }
        }
        
        
        
        
        function listar($tabela){
            $sql = "SELECT * FROM $tabela";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        
        function selecionar($tabela, $campo, $parametro){
            $sql = "SELECT * FROM $tabela WHERE $campo = $parametro";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function selecionarLike($tabela, $campo, $parametro){
            $sql = "SELECT * FROM $tabela WHERE $campo LIKE '%$parametro%'";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        //LISTAR OUTROS COM A PASSAGEM DE PARÂMETRO 
        function listarOutrosParametros($campo, $parametro){
            $sql = "SELECT outros.id, outros.descricao, responsavel.nome as respNome, responsavel.sobrenome as respSobre, local.nome as locNome FROM outros, responsavel, local WHERE $campo LIKE '%$parametro%' and outros.idResponsavel=responsavel.id and outros.idLocal=local.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        //LISTAR TODOS OS OUTROS
        function listarOutros(){
            $sql = "SELECT outros.id, outros.descricao, responsavel.nome as respNome, responsavel.sobrenome as respSobre, local.nome as locNome FROM outros, responsavel, local WHERE outros.idResponsavel=responsavel.id and outros.idLocal=local.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        //LISTAR ATIVOS DE REDE COM A PASSAGEM DE PARÂMETRO 
        function listarAtivosDeRedeParametros($campo, $parametro){
            $sql = "SELECT ativoDeRede.id, ativoDeRede.descricao, ativoDeRede.mac, responsavel.nome as respNome, responsavel.sobrenome as respSobre, local.nome as locNome FROM ativoDeRede, responsavel, local WHERE $campo LIKE '%$parametro%' and ativoDeRede.idResponsavel=responsavel.id and ativoDeRede.idLocal=local.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        //LISTAR TODOS OS ATIVOS DE REDE
        function listarAtivosDeRede(){
            $sql = "SELECT ativoDeRede.id, ativoDeRede.descricao, ativoDeRede.mac, responsavel.nome as respNome, responsavel.sobrenome as respSobre, local.nome as locNome FROM ativoDeRede, responsavel, local WHERE ativoDeRede.idResponsavel=responsavel.id and ativoDeRede.idLocal=local.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }


         //LISTAR MOVEL COM A PASSAGEM DE PARÂMETRO 
         function listarMovelParametros($campo, $parametro){
            $sql = "SELECT movel.id, movel.descricao, movel.altura, movel.largura, movel.peso, responsavel.nome as respNome, responsavel.sobrenome as respSobre, local.nome as locNome FROM movel, responsavel, local WHERE $campo LIKE '%$parametro%' and movel.idResponsavel=responsavel.id and movel.idLocal=local.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        //LISTAR TODOS OS MOVEIS
        function listarMovel(){
            $sql = "SELECT movel.id, movel.descricao, movel.altura, movel.largura, movel.peso, responsavel.nome as respNome, responsavel.sobrenome as respSobre, local.nome as locNome FROM movel, responsavel, local WHERE movel.idResponsavel=responsavel.id and movel.idLocal=local.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }



        function verificaLogin($user, $hash){
            $sql = "SELECT count(*) as contador FROM usuario WHERE senha='$hash' and usuario='$user'";
            try{
                
                $resultado = $this->con->query($sql);
                
                foreach($resultado as $r){
                    if($r['contador'] != 0){
                        return true;
                    }
                }
                return false;
                
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        
        function deletarPorCampo($tabela, $campo, $parametro){
            $sql = "DELETE FROM $tabela WHERE $campo = '$parametro'";
            try{
                $this->con->exec($sql);
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function deletarPorId($tabela, $id){
            $sql = "DELETE FROM $tabela WHERE id = $id";
            try{
                $linhas = $this->con->exec($sql);

                if($linhas == 0){
                    //echo "<script> alert('Usuário não deletado'); </script>";
                    $sql = "SELECT * FROM $tabela WHERE id = $id";
                    $result = $this->con->query($sql);
                    $count=0;
                    foreach($result as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('$tabela não pode ser deletado(a), verifique possíveis dependências'); </script>";
                    }else {
                        echo "<script> alert('$tabela não existe no banco!'); </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('Usuário deletado com sucesso'); </script>";
                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                echo "<script> alert('Erro ao deletar'); </script>";
                return false;
            }
        }
        
        function alterar($tabela, $id, $campo, $parametro){
            $sql = "UPDATE $tabela SET $campo = $parametro WHERE id = $id";
            try{
                $this->con->exec($sql);
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
            

    }
        
?>
