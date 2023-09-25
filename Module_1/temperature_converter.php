<html>
<head>
<title>Temperature Converter</title>
</head>
<body>
<h1>Temperature Converter</h1>
<h3>Enter the temperature in the box</h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="number" name="temperature"><br>
<input type="radio" name="units" value="C">Celcius
<input type="radio" name="units" value="F">Farenheit <br><br>
<input type="submit" name="submit" value="CONVERT"><br><br>
</form>
</body>
</html> 
<?php
if(isset($_POST['submit']))
{
 $temperature=$_POST['temperature'];
 $units=$_POST['units'];
if($units=="C")
{
$result=$temperature*9/5+32;
echo "$temperature Degree Celcius = " .$result . " Degree Farenheit";
}
else
{
$result=($temperature-32)*5/9;
echo "$temperature Degree Farenheit = " .$result . " Degree Celcius";
}
}
?>
