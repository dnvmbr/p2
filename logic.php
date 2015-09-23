<?php
  $data = file_get_contents('words.txt');

  $words = explode(PHP_EOL, $data);
  $words_len = count($words);

  $special = ['@','!','#','$','%','^','&','*','(',')','-','=','_','+','`','~']; //array of special characters to include

  $count = 3; //default value
  if (isset($_POST['count'])){
    $count = $_POST['count']; //overwrite the default value if exists
  }

  $numb = 0; //default value
  if (isset($_POST['numb'])){
    $numb = $_POST['numb']; //overwrite the default value if exists
  }

  $char = 0; //default value
  if (isset($_POST['char'])){
    $char = $_POST['char']; //overwrite the default value if exists
  }

  $case = 'as-is';  //default value
  if (isset($_POST['case'])){
    $case = $_POST['case']; //overwrite the default value if exists
  }

  $password = $words[rand(0,$words_len)];
  for ($i=1; $i < $count; $i++) { //logic for appending words requested to password string
    $password .= '-' . $words[rand(0,$words_len)];
  }

  for ($j = 0; $j < $numb; $j++) { //logic for appending numbers requested to password string
    $password .= rand(0,9);
  }

  for ($k=0; $k < $char; $k++) { //logic for appending special chars requested to password string
    $password .= $special[rand(0,(count($special))-1)];
  }

  // Converts password to upper or lowercase,
  if ($case == 'upper') {
    $password = strtoupper($password);
  }
  else if ($case == 'lower'){
    $password = strtolower($password);
  }
