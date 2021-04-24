<?php
    $rubles = $_GET['rubles'];
    $penny = $_GET['penny'];
    $quantity = $_GET['quantity'];

    $rublesPrice = $rubles*$quantity;
    $pennyPrice = $penny*$quantity;

    if (is_float($rublesPrice) ||is_float($pennyPrice) ){
        //ОТРАБОТКА ОИСКЛЮЧЕНИЯ
        echo "Программа должна получить на вход 3 целых числа";
        die();
    } elseif ($pennyPrice >= 100) {
        $pennyPrice -= 100;
        $rublesPrice++;
    }
    echo $rublesPrice.'<br>';
    echo $pennyPrice;