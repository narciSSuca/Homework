<?php
  $text = (string) $_GET['string'];
  $MirrorText = "";
    for($i = mb_strlen($text, "UTF-8"); $i >= 0; $i--) {
        $MirrorText .= mb_substr($text, $i, 1, "UTF-8");
    }
  echo $MirrorText;

/* РАБОЧИЙ ВАРИАНТ, НО ФУНКЦИЯ НЕПРАВИЛЬНО ОТОБРАЖАЕТ КИРИЛИЦУ
   $MirrorText = strrev($text);
   echo $MirrorText; */
