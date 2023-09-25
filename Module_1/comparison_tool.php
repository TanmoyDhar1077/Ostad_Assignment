<html>  
<body>  
    <h1>Number Comparison</h1>
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Submit">  
</form>  
<?php
if(isset($_POST['submit']))
{
$number1 = isset($_POST['number1']) ? $_POST['number1'] : null;
$number2 = isset($_POST['number2']) ? $_POST['number2'] : null;
if($number1>$number2){
    echo "$number1 is larger then $number2";}
else
{
    echo "$number2 is larger then $number1";
}
}

?>
</body>  
</html>
