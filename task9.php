<?php
  $number = 55;

  $numToStr = strval($number);
  $digit1 = intval($numToStr[0]);
  $digit2 = intval($numToStr[1]);

  if ($digit1 > $digit2) {
    echo "In the number " . $number . " first digit " . $digit1 . " is bigger than second digit " . $digit2;
  } else if ($digit2 > $digit1) {
    echo "In the number " . $number . " second digit " . $digit2 . " is bigger than first digit " . $digit1;
  } else {
    echo "In the number " . $number . " first digit " . $digit1 . " equals to second digit " . $digit2;
  }
  
?>
