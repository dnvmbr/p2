<?php
  error_reporting(-1); # Report all PHP errors
  ini_set('display_errors', 1);
 require('logic.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>P2 - P@ssw0rds</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <h1><?php print_r($password) ?></h1>
  </br></br></br>
  <h3>
    <form method='POST' action=''>
      <label for='count'>How many words?</label>
      <input type='number' min="0" max="10" step="1" id='count' name='count' placeholder='0'></br>
      <label for='numb'>How many numbers?</label>
      <input type='number' min="0" max="10" step="1" id='numb' name='numb' placeholder='0'></br>
      <label for='char'>How many special chars?</label>
      <input type='number' min='0' max='10' step='1' id='char' name='char' value=true placeholder='0'></br></br>
      <input type='hidden' id='upper-hidden' value=false name='upper'>
      <label for='as-is'>As Is </label>
      <input type='radio' name='case' id='as-is' value='as-is' checked></br>
      <label for='upper'>UPPER </label>
      <input type='radio' name='case' id='upper' value='upper'></br>
      <label for='lower'>lower </label>
      <input type='radio' name='case' id='lower' value='lower'></br></br>

      <input class='btn btn-primary btn-lg' type='submit' name='submit' value='Get me a dope password!'>
    </form>
  </h3>
</body>
