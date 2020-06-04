<?php
    
    class create {

        public static function insert($dadosProdutos) {

            if(empty($dadosProdutos['descricao']) OR  empty($dadosProdutos['preco']) OR empty($dadosProdutos['estoque']))  {
                throw new Exception("Preencha todos os campos!");
                return false;
                
            }
            
            $conn = connection::getConn();

                 
            $sql = 'insert into projeto.produtos (descricao, preco, estoque) values (:desc, :pre, :est)';
            $sql = $conn->prepare($sql);
            $sql->bindValue(':desc', $dadosProdutos['descricao']);
            $sql->bindValue(':pre', $dadosProdutos['preco']);
            $sql->bindValue(':est', $dadosProdutos['estoque']);
            $res = $sql->execute();


            if($res == 0) {
                throw new Exception("Falha ao Cadastrar");

                return false;
            }

           return true;
        
        }

    

    }

    
?>