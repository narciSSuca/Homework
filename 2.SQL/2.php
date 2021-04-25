<?php
    include_once "connect.php";

    $sql = "SELECT * FROM posts";
    $res = pg_query($connection,$sql);
    $res = pg_fetch_all($res);
    foreach ($res as $element){
        echo "<h1>".$element['id']." ";
        echo $element['title']."</h1>";
        echo "<p>".$element['content']."</p>";
        echo "<p>".$element['date']."</p>";
    }