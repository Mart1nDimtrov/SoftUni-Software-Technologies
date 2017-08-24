<!DOCTYPE html>
<head>
    <title>Multiply By Two</title>
</head>
<body>

<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["num"])){
    $num = intval($_GET["num"]);
    $num *= 2;
    echo $num;
}
?>
</body>
</html>
