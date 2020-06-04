<?php
    class deletar {  

        public static function delete($id) {

            $con = connection::getConn();
    
            $sql = "DELETE FROM projeto.produtos WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(':id', $id);
            $resultado = $sql->execute();

            if ($resultado == 0) {
                throw new Exception("Falha ao deletar cliente");
                return false; 
            }

            return true;
        }
    }

?>
