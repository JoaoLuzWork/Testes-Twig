<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once "./src/Produto.php";
    
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
    $twig = new Twig_Environment($loader);

    include './conexoo.php';
    $db = getConexao();
    $sql = "SELECT * FROM produtos";
    $statement = $db->prepare($sql);
    $statement->execute();


    while ($row = $statement->fetch()) {
        $produtos[] = new Produto($row["name"], $row["value"], $row["custo"], $row["estoque"]); 
    }
    
    $parametros = ['produtos' => $produtos];
    $template = $twig->loadTemplate('template.twig');
    echo $template->render($parametros);


