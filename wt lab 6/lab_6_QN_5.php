<?php
$Student=" is a nice girl in the town Jita";
$Students1 = array(
    'Ram' => 70, 
    'Shaym' => 40, 
    'Hari' => 95,
    'Rita' => 55, 
    'Sita' => 82, 
    'Jita' => 93,
);
$Students2 = array(
    'Jon' => 78, 
    'Ron' => 75, 
    'Son' => 65,
    'Don' => 54, 
    'Gun' => 45, 
    'Run' => 44,
);
echo "Before sorting";
echo"<br>";
var_dump($Students1);
echo"<br>";
var_dump($Students2);
asort($Students1);
echo "<br>";
echo "After sorting using asort";
echo"<br>";
var_dump($Students1);
echo"<br>";
var_dump($Students2);
echo"<br>";
rsort($Students2);
echo "After sorting using rsort";
echo"<br>";
var_dump($Students1);
echo"<br>";
var_dump($Students2);
echo"<br>";
ksort($Students2);
echo "After sorting using ksort";
echo"<br>";
var_dump($Students1);
echo"<br>";
var_dump($Students2);
echo"<br>";
krsort($Students2);
echo "After sorting using krsort";
echo"<br>";
var_dump($Students1);
echo"<br>";
var_dump($Students2);
echo"<br>";
?>