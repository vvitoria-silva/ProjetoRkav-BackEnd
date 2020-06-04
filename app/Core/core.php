<?php
    class Core {

        private $user;
        private $error;

        public function __construct() {

            
            $this->user = $_SESSION['usr'] ?? null;
            $this->error = $_SESSION['msg_error'] ?? null;

            if(isset($this->error)) {
                if($this->error['count'] === 0 ) {
                    $_SESSION['msg_error']['count']++;
                    
                }else{
                    unset($_SESSION['msg_error']);
                }
            }
        }  

        public function start($urlGet) {

            if( isset($urlGet['metodo'])){
                $acao =  $urlGet['metodo'];
            }else{
                $acao = 'index';
            }
            

            if (isset($urlGet['pagina'])) {
                $controller = ucfirst($urlGet['pagina'].'Controller');
            }else{
                $controller = 'LoginController';
            }

            if(!class_exists($controller)) {
                $controller = "ErroController";
            }

            if(isset($urlGet['id']) && $urlGet['id'] != null) {
                $id = $urlGet['id'];
            }else{
                $id = null;
            }

            if ($this->user) {

                $pg_permition = ['ClientesController', 'HomeController', 'DeletarController','CadastrarController', 'PesquisarController', 'AtualizarController', 'ErrorController', 'ProdutosController'] ;

                if(!isset($controller) || !in_array($controller, $pg_permition)) {
                    $controller = 'HomeController';
                    $acao = 'index';
                }

            }else{
                $pg_permition = [ 'LoginController']; 

                if(!isset($controller) || !in_array($controller, $pg_permition)) {
                    $controller = 'LoginController';
                    $acao = 'index';
                }
            }    

            return call_user_func_array(array(new $controller, $acao), array('id' => $id));

        }
    }
?>

