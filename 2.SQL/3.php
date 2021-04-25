<?php
    include_once "connect.php";

    if(empty($_POST['title'])||empty($_POST['content'])||empty($_POST['date'])){
        echo "Параметры не введены или введены не коректно";
        die();
    }
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $sql = "INSERT INTO posts (title, content, date) VALUES ('$title', '$content', '$date')";
    $res = pg_query($connection,$sql);
