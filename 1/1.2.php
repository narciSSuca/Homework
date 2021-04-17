<?php
  $FirstName = (string) $_POST['first_name'];
  $LastName = (string) $_POST['last_name'];
  $patronymic = (string) $_POST['patronymic_name'];

  $FullName = $FirstName. " " .$LastName. " " .$patronymic;
  echo $FullName;
