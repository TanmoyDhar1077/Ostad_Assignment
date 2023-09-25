<html>
<head>
    
    <title>Simple Calculator</title>

</head>
<body>
    <h1>Simple Calculator</h1>
    <?php 
        if(isset($_POST['count'])) { 
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
        
            // validate user inputs
            if (!is_numeric($num1) || !is_numeric($num2)) {
                $error = "Both inputs must be numeric values.";
            } else {
                switch($operator) {
                    case 'Addition':
                        $result = $num1 + $num2;
                        break;
                    case 'Subtraction':
                        $result = $num1 - $num2;
                        break;
                    case 'Multiplication':
                        $result = $num1 * $num2;
                        break;
                    case 'Division':
                        // avoid zero
                        if ($num2 == 0) {
                            $error = "Cannot divide by zero.";
                        } else {
                            $result = $num1 / $num2;
                        }
                        break;
                }
            }
        }
    ?>
    <main>
        <section>
            <form method="post">
                <input type="text" name="num1" placeholder="Enter first number">
                <br><br>
                <input type="text" name="num2" placeholder="Enter second number">
                <br><br>
                <select name="operator">
                    <option value="Addition">Addition</option>
                    <option value="Subtraction">Subtraction</option>
                    <option value="Multiplication">Multiplication</option>
                    <option value="Division">Division</option>
                </select>
                <br><br>
                <input type="submit" name="count" value="Calculate">
                <br><br>
                <?php if (isset($result)) { ?>
                    <input type="text" value="<?php echo $result; ?>" readonly>
                <?php } ?>
                <?php if (isset($error)) { ?>
                    <p style="color:red;"><?php echo $error; ?></p>
                <?php } ?>
            </form>
        </section>
    </main>
</body>
</html>