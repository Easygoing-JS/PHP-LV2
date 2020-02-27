<?php
    $h1 = 'Каталог товаров';
    $title = 'Главная. ' . $h1;

    include('config/common.php');
    include('config/db.php');


    //$num_of_items; переменная для корзины, которая сейчас удалена


    //массивы товаров и переменные
    include('engine/index_vars.php');


    // autoloader
    spl_autoload_register(
        function ($class_name) {
            include __DIR__ . '/lib/Twig/lib/' . str_replace('_', '/', $class_name) . '.php';
        });


    try {

        $loader = new Twig_Loader_Filesystem('templates');

        $twig = new Twig_Environment($loader);

        $template = $twig->loadTemplate('index.tmpl');

        echo $template->render(array(
            'h1'        => $h1,
            'title'     => $title,
            'products'  => $products,
            'get_id'    => $get_id,
            'error'     => $error,
            'pages'     => $pages,
            'from'      => $from,
            'page_this' => $page_this
        ));

    } catch (Exception $e) {
        die ('ERROR: ' . $e->getMessage());
    }
?>