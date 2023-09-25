<?php
// Fibonacci series upto 15 numbers

$n=15;

function fibonacci($n){  
    if($n == 0){  
		return 0;  
    }
	else if( $n == 1)
	{  
		return 1;  
	}  
	else {  
		return (fibonacci($n-1) + fibonacci($n-2));  
	}   
}  
 
for ($i = 0; $i < $n; $i++){  
	echo fibonacci($i);  
	echo "\n";  
}  
?>

