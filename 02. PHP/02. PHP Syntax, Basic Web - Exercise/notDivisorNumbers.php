<!DOCTYPE html>
<head>
    <title>Factorial</title>
</head>
<body>

<form>
    Num: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["num"])){
    $count = intval($_GET["num"]);
    $factorial = 1;
    for ($i = $count; $i >= 1; $i--){
        if (!($count % $i == 0)){
            echo $i . " ";
        }
    }
}
?>
</body>
</html>