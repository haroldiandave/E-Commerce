<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">

        <form method="post">
            <label>First Number Here:</label>
            <input type="text" name="num1" placeholder="" required><br>
            <label>Second Number Here:</label>
            <input type="text" name="num2" placeholder="" required><br>
            <select name="operator">
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select><br>
            <input type="submit" name="calculate" value="Compute Again">
        </form>
        
        <?php
        if(isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            switch($operator) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operator";
            }
            echo "<p class='result-message'>The Sum is: $result</p>";
        }
        ?>
    </div>
</body>
</html>
