<?php

    class CadastrarController {

        public function create() {
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('cadastrar.html');

            $parametros = array();

            $conteudo = $template->render($parametros);
            echo $conteudo;
        }

        public function insert() {

            try {
                create::insert($_POST);
                echo '<script>alert("Cadastro realizado com sucesso!");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=produtos"</script>';
            }catch(Exception $e) {
                echo '<script>alert("'.$e->getMessage().'");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=cadastrar&metodo=create"</script>';
                
            }
        }

    }

?>