<?php

$i = 1;
$j = 1;
function mult_table() {
  echo '<table>';
  echo '<tr>';
  for($k = 0; $k <= 100; $k++) {
    echo '<td>' . $k . '</td>';
  }
  for($i = 0; $i <= 100; $i++) {
    for($j = 0; $j <= 100; $j++) {
      if($j == 0) {
        echo '<tr><td>' . $i . '</td>';
      }
      else {
        echo '<td>' . $i*$j . '</td>';
      }
    }
  }
  echo '</tr>';
  echo '</table>';
}

mult_table();
?>
