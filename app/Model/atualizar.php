<?php
    class atualiza {

        public static function selecionaPorId($idProduto) {
            $con = connection::getConn();
    
            $sql = "SELECT * FROM projeto.produtos WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(':id', $idProduto, PDO::PARAM_INT);
            $sql->execute();
    
            $resultado = $sql->fetchObject("atualiza");

    
            if(!$resultado) {
                throw new Exception("Error Processing Request");
            }else{
                $resultado->Select = Select::seleciona($resultado->id);
            }

            return $resultado;
        }

        public static function update($params) {
            $con = connection::getConn();

            $sql = "UPDATE projeto.produtos SET descricao = :desc, preco = :pre, estoque = :est WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(':desc', $params['descricao']);
            $sql->bindValue(':pre', $params['preco']);
            $sql->bindValue(':est', $params['estoque']);
            $sql->bindValue(':id', $params['id']);
            $resultado = $sql->execute();

            if ($resultado == 0) {
                throw new Exception("Falha ao alterar publicação");
                return false;
                
            }

            return true;

        }
    }
?>