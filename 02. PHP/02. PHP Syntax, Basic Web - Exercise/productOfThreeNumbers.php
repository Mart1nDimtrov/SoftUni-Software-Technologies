<!DOCTYPE html>
<head>
    <title>Product of Three Numbers</title>
</head>
<body>

<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    L: <input type="text" name="num3" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["num3"])){
    $num1 = intval($_GET["num1"]);
    $num2 = intval($_GET["num2"]);
    $num3 = intval($_GET["num3"]);
    $numsUnfiltered = array($num1, $num2, $num3);
    $numCount = count(array_filter($numsUnfiltered, function($num){
        if ($num *  -1 > 0){
            return $num;
        }
    }));
    if ($numCount % 2 == 1){
        echo "negative";
    }
    else{
        echo "positive";
    }
}
?>
</body>
</html>