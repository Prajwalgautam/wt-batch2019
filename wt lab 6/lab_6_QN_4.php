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
//String functions here:
$b=chop("Gun");
echo "$b";
echo "<br>";
$a=trim("Jita");
echo "$a";
echo "<br>";
$c=ltrim("Rita");
echo "$c";
echo "<br>";
$p=strlen("Son");
echo "$p";
//array functions 
is_array($Students1);
in_array("44", $Students2);
explode(7, "home");
array_push($Students1, "Ram");
array_pop($Students1);
sort($Students2,SORT_NUMERIC);
?>
