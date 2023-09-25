<html>
<head>  
<title>Even Odd Checker</title>  
</head> 
<body>  
<h1>Even Odd Checker</h1>
<form method="post">  
    Enter a Number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php   
    if($_POST){  
        $number = $_POST['number'];   
          
        if(($number % 2) == 0)
        {  
            echo "$number is an Even number";  
        }
        else
        {  
            echo "$number is Odd number";  
        }  
    }  
?>  