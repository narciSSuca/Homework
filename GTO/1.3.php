<?php
    $num = $_GET['num'];
    if ($num >= 1000 && $num <= 9999 ){
        $MaxNum = str_split($num);
        arsort($MaxNum);
        $MaxNum = implode("", $MaxNum);

    } else {
        //ОТРАБОТКА ОИСКЛЮЧЕНИЯ
        echo "Введите натуральное четырёхзначное число";
    }
    echo $MaxNum;