<?php
  $speed1 = 80; // km/h
  $speed2 = 85000; // m/s 
  // 1km = 1000 m
  // 1 h = 3600 s

  // переведемо першу швидкість в m/s 
  $result = ($speed1 * 1000) / 3600;

  if ($result > $speed2) {
    echo $result . " speed1 is bigger";
  } else if ($speed2 > $result) {
    echo $speed2 . " speed2 is bigger";
  } else {
    echo "speed1 equals speed2";
  }
?>

