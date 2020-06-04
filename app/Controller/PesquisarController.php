<?php

    class PesquisarController {

        public function search() {
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('pesquisar.html');

            $parametros = array();

            $conteudo = $template->render($parametros);
            echo $conteudo;
        }

        public function rsearch() {

            $pesquisa = $_POST['descricao'];

            try {

                $colecProdutos = search::selecionaN($pesquisa);

                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('rpesquisar.html');

                $parametros = array();

                $parametros['produtos'] = $colecProdutos;

                $produtos = $template->render($parametros);
                echo $produtos;

            } catch(Exception $e) {
                echo '<script>alert("'.$e->getMessage().'");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=pesquisar&metodo=search"</script>';
            }

        }
    }

?>