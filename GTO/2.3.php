<?php
    //ВАЛИДАТОР
    if($_GET['n'] < 2 || $_GET['n'] > 2*10**6 || is_float($_GET['n']*1) ){
        echo "Программ принимает натуральное число от 2 до 2*10 в пятой степени";
        die();
    } else {
        $Number = $_GET['n'];
    }
    //ФУНКЦИЯ
     function Wopl($number){
         $res=0;
         for ($i=1;$i<=9;$i++){
             if ($number%$i==0){
                 $res++;
             }
         }
         if ($res > 2){
             return "composite";
         } else {
             return "prime";
         }
     }

    echo Wopl($Number);

