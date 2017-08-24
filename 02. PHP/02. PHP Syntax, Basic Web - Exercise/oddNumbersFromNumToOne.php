<!DOCTYPE html>
<head>
    <title>Numbers from One to N</title>
</head>
<body>

<form>
    Count: <input type="text" name="count" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["count"])){
    $count = intval($_GET["count"]);
    for ($i = $count; $i >= 1; $i--){
        if ($i % 2 == 1){
            echo $i . " ";
        }
    }
}
?>
</body>
</html>