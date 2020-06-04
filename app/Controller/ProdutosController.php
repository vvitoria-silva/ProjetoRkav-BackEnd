<?php

    class ProdutosController {

        public function index() {

            $colecProdutos = selectP::seleciona();

            try {

                $colecProdutos = selectP::seleciona();

                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('produtos.html');

                $parametros = array();


                $parametros['produtos'] = $colecProdutos;

                $produtos = $template->render($parametros);
                echo $produtos;


            } catch(Exception $e) {
                echo $e->getMessage();
            }

        }

    }

?>