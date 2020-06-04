<?php

    class search {
        
        public static function selecionaN($nomeProduto) {
            $con = connection::getConn();


            $sql = "SELECT * FROM projeto.produtos WHERE descricao LIKE '%$nomeProduto%'";
            $sql = $con->prepare($sql);
    
            $sql->execute();
    
            $resultado = array();

            while  ($row = $sql->fetchObject('search')) {
                $resultado[] = $row;
            }
            
            if(!$resultado) {
                throw new Exception("Não foi encontrado nem um registro no banco.");
                ;
            }

            return $resultado;
                    
           

        }
        

    }

?>