<?php
  $data = file_get_contents('words.txt');

  $words = explode(PHP_EOL, $data);
  $words_len = count($words);

  $special = ['@','!','#','$','%','^','&','*','(',')','-','=','_','+','`','~'];

  $count = 3; //default value
  if (isset($_POST['count'])){
    $count = $_POST['count'];
  }

  $numb = 0; //default value
  if (isset($_POST['numb'])){
    $numb = $_POST['numb'];
  }

  $char = 0; //default value
  if (isset($_POST['char'])){
    $char = $_POST['char'];
  }

  $case = 'as-is';  //default value
  if (isset($_POST['case'])){
    $case = $_POST['case'];
  }

  $password = $words[rand(0,$words_len)];
  for ($i=1; $i < $count; $i++) {
    $password .= '-' . $words[rand(0,$words_len)];
  }

  for ($j = 0; $j < $numb; $j++) {
    $password .= rand(0,9);
  }

  for ($k=0; $k < $char; $k++) {
    $password .= $special[rand(0,(count($special))-1)];
  }

  if ($case == 'upper') {
    $password = strtoupper($password);
  }
  else if ($case == 'lower'){
    $password = strtolower($password);
  }
