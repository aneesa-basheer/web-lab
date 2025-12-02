<?php

$student=array("Alfiya","Shahina","Rojina","Kavya");
echo "<h2>Array :</h2>";
print_r($student);

echo "<br>";

asort($student);
echo "<h2>Array in Ascending order(asort) :</h2>";
print_r($student);

echo "<br>";

arsort($student);
echo "<h2>Array in Descending order(arsort) :</h2>";
print_r($student);
?>