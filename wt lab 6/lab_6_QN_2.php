<?php
$p=1;
$num=2;
echo "The first 20 Even Numbers Are:";
echo "<br>";
while($p<=20)
{
	if($num%2==0){
		echo "$num";
		echo "<br>";
		$p++;
		$num+=2;
	}
    
}

?>