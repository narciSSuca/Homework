<?php
    if ($_GET['year'] < 1000 || $_GET['year'] > 9000){
        echo "заданое число должно находится в интервале (1000 ≤ y ≤ 9000)";
        die();
    } elseif(is_float($_GET['year']+1)) {
        echo "заданное число должно быть натуральным";
        die();
    }
    $inputYear = $_GET['year'];
    for($i=$inputYear+1;$i <= 10000;$i++ ){
        $array = str_split($i);
        if(count(array_unique($array))==count($array))
        {
            echo $i;
            die();
        }
    }
