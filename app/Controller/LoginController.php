<?php
    class LoginController {

        public function index() {
            
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('login.html');

            $param['error'] = $_SESSION['msg_error'] ?? null;

            return $template->render($param);

        }

        public function check() {

            try {
                $user = new User;
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->validateLogin();

                header('Location: http://localhost/SistemaRkav/?pagina=home');

            }catch (\Exception $e) {

                $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count' => 0);
                header('Location: http://localhost/SistemaRkav/');
                
            }
            
        }

    }
?>