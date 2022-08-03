<?php
    require_once __DIR__ . '/vendor/autoload.php';

    require_once "src/FakeDB.php";
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
    $twig = new Twig_Environment($loader);

    $parametros = ['produtos' => $produtos];
    $template = $twig->loadTemplate('template.twig');
    echo $template->render($parametros);


