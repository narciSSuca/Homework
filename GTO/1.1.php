<?php
    $num = $_GET['number'];
    if ($num > -100 && $num < 100){
        $SqrtNum = $num*$num;
        if (is_float($SqrtNum)) {
            echo "На вход должно даваться целое число";
        } else {
            echo $SqrtNum;
        }
    } else {
        //ОТРАБОТКА ОИСКЛЮЧЕНИЯ
       echo "На вход должно даваться одно число, по модулю не превосходящее 100";
    }
