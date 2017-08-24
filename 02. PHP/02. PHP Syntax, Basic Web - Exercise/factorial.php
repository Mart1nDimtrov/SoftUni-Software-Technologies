<!DOCTYPE html>
<head>
    <title>Factorial</title>
</head>
<body>

<form>
    Factorial: <input type="text" name="factorial" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["factorial"])){
    $count = intval($_GET["factorial"]);
    $factorial = 1;
    for ($i = $count; $i >= 1; $i--){
        $factorial *= $i;
    }
    echo $factorial;
}
?>
</body>
</html>