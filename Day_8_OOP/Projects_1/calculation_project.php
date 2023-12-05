<?php
include_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Project</title>
</head>
<body style="background-color: #96EFFF">


<form action="#" method="POST">
    <table>
        <tr>
            <td>Enter the first number: </td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the second number: </td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST['calculation'])){
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];

    if(empty($numberOne) || empty($numberTwo)){
        echo "<span style='color: #AF2655'>Field must be filled out</span>";
    }
    else{
        $cal = new Calculation();
        $cal -> add($numberOne, $numberTwo);
        $cal -> sub($numberOne, $numberTwo);
        $cal -> mul($numberOne, $numberTwo);
        $cal -> div($numberOne, $numberTwo);
    }
}

?>

    
</body>
</html>