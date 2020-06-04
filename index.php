<?php

    session_start();
    require_once 'app/Core/core.php';

    require_once 'lib/database/connection.php';

    require_once 'app/Controller/LoginController.php';
    require_once 'app/Controller/HomeController.php';
    require_once 'app/Controller/CadastrarController.php';
    require_once 'app/Controller/AtualizarController.php';
    require_once 'app/Controller/ClientesController.php';
    require_once 'app/Controller/PesquisarController.php';
    require_once 'app/Controller/DeletarController.php';
    require_once 'app/Controller/ProdutosController.php';


    require_once 'app/Model/user.php';
    require_once 'app/Model/cadastrar.php';
    require_once 'app/Model/atualizar.php';
    require_once 'app/Model/deletar.php';
    require_once 'app/Model/pesquisar.php';
    require_once 'app/Model/clientes.php';
    require_once 'app/Model/produtos.php';



    require_once 'vendor/autoload.php';


    $core = new Core();
    echo $core->start($_GET);


?>