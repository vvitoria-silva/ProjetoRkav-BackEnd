<?php

    class DeletarController {

        public function delete($paramId) {
 
            try {
                deletar::delete($paramId);
                echo '<script>alert("Dados Deletados com sucesso!");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=home"</script>';
                
            }catch(Exception $e) {
                echo '<script>alert("'.$e->getMessage().'");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=produtos"</script>';
            }

        }
    }

?>
