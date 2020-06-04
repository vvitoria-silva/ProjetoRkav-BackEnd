<?php

    class HomeController {

        public function index() {

            
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.html');
            
            $parametros['name_user'] = $_SESSION['usr']['name_user'];

            $conteudo = $template->render($parametros);
            echo $conteudo; 


        }  
        
        public function logout() {
            unset($_SESSION['usr']);
            session_destroy();

            header('Location: http://localhost/SistemaRkav/');
        }

    }


?>