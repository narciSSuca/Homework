<?php
    $roadOne = $_GET['a1'];
    $roadTwo = $_GET['a2'];
    $roadTree = $_GET['a3'];
    if(is_float($roadTwo+$roadTree+$roadOne)){
        echo "Программа должна получить три целые числа";
        die();
    }

    if ($roadTwo > $roadOne ) {
        $RoadMap = $roadOne;
        //подсчитываем дорогу домой
        if ($roadTwo < $roadOne+$roadTree) {
            $RoadMap += $roadTwo;
        } else {
            $RoadMap += $roadOne+$roadTree;
        }
    } else {
        $RoadMap = $roadTwo;
        //подсчитываем дорогу домой
        if ($roadOne < $roadTwo+$roadTree) {
            $RoadMap += $roadOne;
        } else {
            $RoadMap += $roadTwo+$roadTree;
        }
    }
    //ТАК КАК ПОДСЧЁТ ДОРОГИ ДО ВТОРОГО МАГАЗИНА БУДЕТ ОДИНАКОВЫМ ПРИ ЛЮБЫХ УСЛОВИЯХ, ЭТОТ БЛОК МОЖНО ВЫНЕСТИ ИЗ ГЛАНОГО if, во избежании дублирования кода
    if ( $roadTree > $roadOne+$roadTwo ){
        $RoadMap += $roadOne+$roadTwo;
    } else {
        $RoadMap += $roadTree;
    }
    echo $RoadMap;