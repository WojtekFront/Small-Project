<html>

<head>

</head>

<body>


    <form method="get" target="_self">
        <legend>Calculator</legend>
        <input type="text" name="num1" placeholder="number1">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <input type="text" name="num2" placeholder="number2">

        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
 
    <?php 

    if (isset($_GET['submit'])) {
        if ((isset($_GET['num1'])) && (isset($_GET['operator'])) && (isset($_GET['num2']))) {
            $result1 = $_GET['num1'];
            $result3 = $_GET['operator'];
            $result2  = $_GET['num2'];

            if ((empty($result1)) || (empty($result2))) {
                print 'field 1 and 2 are empty.';
            } elseif ((!preg_match("/^[0-9]*$/", $result1)) or (!preg_match("/^[0-9]*$/", $result2))) {
                print "Only numeric value is allowed.";
            } else {


                switch ($result3) {
                    case "+":
                        echo $result1 + $result2;
                        break;
                    case "-":
                        echo $result1 - $result2;
                        break;
                    case "*":
                        echo $result1 * $result2;
                        break;
                    case "/":
                        echo $result1 / $result2;
                        break;
                    default:
                        echo "You don't choose the operator ";
                        break;
                }
            }
        } else {
            print "You did not complete all the fields ";
        }
    }





    ?>




</body>

</html>