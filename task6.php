<?php
  $a = 7;
  $b = 5;
  $c = 25;

  if ($a > $b && $a > $c) {
    echo $a;
  } else if ($b > $a && $b > $c) {
    echo $b;
  } else if ($c > $a && $c > $b) {
    echo $c;
  }
?>

<?php
  $a = 7;
  $b = 5;
  $c = 25;

  echo max($a, $b, $c);
?>
