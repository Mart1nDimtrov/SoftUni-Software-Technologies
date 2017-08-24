<!DOCTYPE html>
<head>
    <title>Factorial</title>
</head>
<body>

<form>
    Fibonacci: <input type="text" name="fib" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["fib"])){
    $fib = intval($_GET["fib"]);
    $num1 = 1;
    $num2 = 1;
    $temp = 0;
    echo "1 ";
    for ($i = 1; $i <= $fib - 1; $i++){
        echo $num2 . " ";
        $temp = $num1;
        $num1 = $num2;
        $num2 += $temp;
    }
}
?>
</body>
</html>