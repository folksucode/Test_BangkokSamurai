<!DOCTYPE html>
<html>

<head>

</head>

</html>
<?php
#1
#1.1
$n = 5;
for ($i = 0; $i < $n; $i++) {
  for ($j = 1; $j < $n - $i; $j++) {
    echo "&nbsp;&nbsp";
  }
  for ($k = 0; $k <= $i; $k++) {
    echo "o";
  }
  echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

#1.2
for ($i = 0; $i < $n; $i++) {
  for ($j = 0; $j < $n - $i - 1; $j++) {
    echo "&nbsp;&nbsp";
  }
  for ($k = 0; $k < 2 * $i + 1; $k++) {
    echo "o";
  }
  echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$mark = array(
  "mohammad" => array(
    "physics" => 35,
    "maths" => 30,
    "chemistry" => 39
  ),
  "qadir" => array(
    "physics" => 30,
    "maths" => 32,
    "chemistry" => 29
  ),
  "zara" => array(
    "physics" => 31,
    "maths" => 22,
    "chemistry" => 39
  ),
);
echo $mark["mohammad"]["physics"];
echo "<br>";
foreach ($mark as $student => $scores) {
  foreach ($scores as $subject => $score) {
      echo $score . ' ';
  }
}
?>
