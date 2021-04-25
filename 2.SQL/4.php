<?php
    session_start();
    include_once "connect.php";
    if((!empty($_GET['title'])||!empty($_GET['content'])||!empty($_GET['date']))){

        $title = $_GET['title'];
        $content = $_GET['content'];
        $date = $_GET['date'];
        $id = $_SESSION['id'];
        $sql = "UPDATE posts SET title = '$title', content = '$content', date='$date' WHERE id = '$id'";
        $res = pg_query($connection,$sql);
        echo "Запись обновлена";
        die();

        } else {
            if(empty($_GET['id'])){
                echo "Введите ID";
                die();
        }
    }

    $id = (int) $_GET['id'];
    $_SESSION['id'] = $id;
    $sql = "SELECT * FROM posts WHERE id = $id ";
    $res = pg_query($connection,$sql);
    $res = pg_fetch_all($res);
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="4.php?=<?=$id ?>" method="get">
    <?php foreach ($res as $element): ?>
        <input type="text" name="title" value="<?=$element['title']?>">
        <input type="text" name="content" value="<?=$element['content']?>">
        <input type="text" name="date" value="<?=$element['date']?>">
        <input type="submit" name="valid">
    <?php endforeach; ?>
    </form>
</body>
</html>

