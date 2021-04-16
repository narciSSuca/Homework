<form class="" action="#" method="get">
  <input type="text" name="days" value="">
  <button type="submit" name="button">счёт</button>
</form>
<hr>
<?php
    $days = (int) $_GET['days'];
    $AllTime = $days * 86400 ;
    echo $AllTime;
