<?php

    include_once("Good.class.php");
    include_once("good-card.php");


    $good[0] = new Good(1, 'Телевизор', 2000, 10, 'Плоский огромный серый');
    $good[0]->getGood();
    $good[0]->__toString();
    echo 'Good::getCounter()=' . Good::getCounter() . '<hr>';

    $good[1] = new Good(2, 'DVD player', 1000, 20, 'Маленький и серый');
    $good[1]->getGood();
    $good[1]->__toString();

    echo 'Good::getCounter()=' . Good::getCounter() . '<hr>';

    $good[2] = new Good(3, 'Магнитола', 500, 10, 'Белая с кнопками');
    $good[2]->getGood();
    $good[2]->__toString();

    $good[2] = null;
    echo '<hr>удаляем объект: ($good[2] = null) Good::getCounter()=' . Good::getCounter() . '<hr><br>';


    $good2[0] = new GoodFull(4, 'Гарнитура', 1500, 70, 'Белая с кнопками', 'Полное описание гарнитуры');
    $good2[0]->getGoodFull();
    $good2[0]->__toString();
    echo 'Good::getCounter()=' . Good::getCounter() . '<hr>';