<?php

    class AtualizarController {
        
        public function change($paramId) {


            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('atualizar.html');

            $dados = atualiza::selecionaPorId($paramId);

            $parametros = array();
            $parametros['id'] = $dados->id;
            $parametros['descricao'] = $dados->descricao;
            $parametros['preco'] = $dados->preco;
            $parametros['estoque'] = $dados->estoque;

            $conteudo = $template->render($parametros);

            echo $conteudo;
        }

        public function update() {
            try {
                atualiza::update($_POST);
                echo '<script>alert("Alteração realizada com sucesso!");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=produtos"</script>';
            }catch(Exception $e) {
                echo '<script>alert("'.$e->getMessage().'");</script>';
                echo '<script>location.href="http://localhost/SistemaRkav/?pagina=atualizar&metodo=change&id='.$_POST['id'].'"</script>';
                      
            }

        }
        
    }

?>