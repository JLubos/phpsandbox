<?php
  echo date('d'); //Day
  echo "<br>";
  echo date('m'); //Month
  echo "<br>";
  echo date('Y'); //Year
  echo "<br>";
  echo date('l'); //Day of the week
  echo "<br>";
  echo date('Y/m/d');
  echo "<br>";
  echo date('m/d/Y');
  echo "<br>";
  echo date('h'); //Hour
  echo "<br>";
  echo date('i'); //Min
  echo "<br>";
  echo date('s'); //sec
  echo "<br>";
  echo date('a'); //AM or Pm

  // Set Time Zone
  date_default_timezone_set('America/New_York');
  echo date('h:i:sa');

  $timestamp = mktime(10,14, 54, 9, 10, 1981);

  echo $timestamp;

  echo date('m/d/Y h:i:sa', $timestamp);

  $timestamp2 = strtotime('7:00pm March 22 2016');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp5 = strtotime('+2 Days');

  echo $timestamp2;

  echo date('m/d/Y h:i:sa', $timestamp3);


 ?>
