<?php
    $magicNumber = array(0, 1, 5, 6, 25, 76, 376, 625, 9376,90625,109376,890625,2890625,7109376,12890625,87109376,212890625,787109376,1787109376);
    if ($_GET['k'] < 10**6 && !is_float($_GET['k']+1)) {
        $InputNumber = $_GET['k'];
        $result = ' ';
        foreach ($magicNumber as $element){
            if($element < $InputNumber ) {
                $result .= $element.' ';
            }
        }
        echo $result;
//ОТРАБОТКА ОИСКЛЮЧЕНИЯ
    } else {
        echo "Программа должна получить на вход одно натуральное число k, не превосходящее 10 в 6 степени";
    }
