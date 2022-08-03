<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once "src/FakeDB.php";
    require_once "src/Produto.php";
    
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
    $twig = new Twig_Environment($loader);
    
    // atualize os produtos 
    $produtos[0]->vender($_GET[1]);
    $produtos[1]->vender($_GET[2]);
    $produtos[2]->vender($_GET[3]);
    $produtos[3]->vender($_GET[4]);

    if ($produtos>=0) 
    {    
       // mostrar atualizado os produtos e valores
        $parametros = ['produtos' => $produtos];
        $template = $twig->loadTemplate('vendasinfo.twig');
        echo $template->render($parametros);   
    }
    