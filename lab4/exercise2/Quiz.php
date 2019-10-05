<?php
function calculate($ans) {
  $x = ($ans / 5 )* 100;
  return $x;
}

$medals = $_POST["medals"];
$checkmedals = "23";
$WR = $_POST["WR"];
$checkWR = "20.91";
$event = $_POST["event"];
$checkevent = "freestyle";
$age = $_POST["age"];
$checkage = "22";
$location = $_POST["location"];
$checklocation = "tokyo";
$score = 0;

echo "How many gold medals does Michael Phelps have?<br>";
echo "You answered:" . $medals . "<br>";
echo "Correct answer:" . $checkmedals . "<br>";
echo "<br>";
echo "What is the world record in the 50 meter freestyle?<br>";
echo "You answered:" . $WR . "<br>";
echo "Correct answer:" . $checkWR . "<br>";
echo "<br>";
echo "Calaeb Dressel specializes in ___ events<br>";
echo "You answered:" . $event . "<br>";
echo "Correct answer:" . $checkevent . "<br>";
echo "<br>";
echo "How old is Katie Ledecky?<br>";
echo "You answered:" . $age . "<br>";
echo "Correct answer:" . $checkage . "<br>";
echo "<br>";
echo "The 2020 Olympics will be held in ___<br>";
echo "You answered:" . $location . "<br>";
echo "Correct answer:" . $checklocation . "<br>";
echo "<br>";
if ($medals == $checkmedals) {
  $score++;
}
if ($WR == $checkWR) {
  $score++;
}
if ($event == $checkevent) {
  $score++;
}
if ($age == $checkage) {
  $score++;
}
if ($location == $checklocation) {
  $score++;
}

echo "Score: " . calculate($score) . "%<br>";
?>
