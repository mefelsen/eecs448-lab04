<?php
  function cost($qty, $price) {
    $tot = $qty *$price;
    return $tot;
  }
  function totalcost($a, $b, $c, $d) {
    $sum = $a + $b +$c + $d;
    return $sum;
  }

  $user = $_POST["email"];
  $pass = $_POST["password"];
  $flamethrower = $_POST["flamethrower"];
  $brick = $_POST["brick"];
  $hat = $_POST["hat"];
  $ship = $_POST["ship"];

  $flame_cost = cost($flamethrower, 300);
  $brick_cost = cost($brick, 20);
  $hat_cost = cost($hat, 5);

if ($ship == "Free") {
  $shipcost = 0;
}
else if ($ship == "3-Day") {
  $shipcost = 5;
}
else if ($ship == "Overnight") {
  $shipcost = 50;
}

echo "<html><head><link href='customerstyle.css' rel='stylesheet' type='text/css'/>";
echo "</head><body>";
echo "Email: " . $user . "<br>";
echo "Password: " . $pass . "<br>";
echo "Order Summary: <br><br>";

echo "<table><tr><th></th><th>Quantity</th><th>Cost per item</th>";
echo "<th>Sub Total</th></tr>";
echo "<tr><th>Not a Flamethrower</th>";
echo "<td>" . $flamethrower . "</td><td>$4.00</td>";
echo "<td>$" . $flame_cost . "</td></tr>";
echo "<tr><th>Boring Brick</th>";
echo "<td>" . $brick . "</td><td>$20.00</td>";
echo "<td>$" . $brick_cost . "</td></tr>";
echo "<tr><th>Card Boring Hat</th>";
echo "<td>" . $hat . "</td><td>$7.00</td>";
echo "<td>$" . $hat_cost . "</td></tr>";
echo "<tr><th>Shipping</td><td colspan='2'>" . $ship . "</td><td>$" . $shipcost . ".00</td></tr>";
echo "<tr><th>Total Cost</th>";
echo "<th colspan='3'>$" . totalCost($flame_cost, $brick_cost, $hat_cost, $shipcost) . "</th>";
echo "</tr></table></body></html>";

?>
