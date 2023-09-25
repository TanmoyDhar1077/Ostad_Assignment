<?php

$num1=0;
$num2=1;

for($i=0; $i<10; $i++){
	if($num1>100){
		break;
	}
	echo $num1."\n";
	$num3= $num1+$num2;
	$num1=$num2;
	$num2=$num3;
}

 
?>





