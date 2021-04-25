<?php
//http://homework/GTO/2.2.php?N=7&a[]=1&a[]=2&a[]=3&a[]=4&a[]=5&a[]=6&a[]=-3
    $Number = $_GET['a'];
    $CoutNumber = $_GET['N'];
//ВАЛИДАТОР
    if($CoutNumber != count($Number) && $CoutNumber > 1 && $CoutNumber > 100){
        echo 'значение N должно быть равно количеству элементов в массиве, а так же оно не может быть 1 или больше 100';
        die();
    } elseif (max($Number) > 100 || abs(min($Number)) > 100 ) {
        echo 'значания массива должны быть меньше 100 по модулю';
        die();
    } elseif (is_float($CoutNumber+array_sum($Number))){
        echo 'значения элементов и переменная кол-ва элементов массива должны быть целыми числами';
        die();
    }
    for ($i = 0; $i <= count($Number);$i++){
        for($y=$i+1; $y<= count($Number);$y++){
            if($Number[$i]+$Number[$y]==0){
                echo $i.' '.$y;
                die();
            }
        }
    }
