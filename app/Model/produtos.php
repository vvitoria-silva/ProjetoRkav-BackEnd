<?php
    
    class selectP {

        public static function seleciona() {

            $conn = connection::getConn();

                 
            $sql = 'select * from projeto.produtos';
            $sql = $conn->prepare($sql);
            $sql->execute();

            $resultado = array();
        
            while  ($row = $sql->fetchObject('selectP')) {
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