<?php

    class ClientesController {
        public function index() {

            $colecClientes = Select::seleciona();

            try {

                $colecClientes = Select::seleciona();

                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('clientes.html');

                $parametros = array();


                $parametros['clientes'] = $colecClientes;

                $clientes = $template->render($parametros);
                echo $clientes;


            } catch(Exception $e) {
                echo $e->getMessage();
            }

        }

    }

?>