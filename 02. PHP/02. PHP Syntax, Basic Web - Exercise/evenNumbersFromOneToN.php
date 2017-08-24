<!DOCTYPE html>
<head>
    <title>Even Numbers from One to N</title>
</head>
<body>

<form>
    Count: <input type="text" name="count" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["count"])){
    $count = intval($_GET["count"]);
    for ($i = 1; $i <= $count; $i++){
        if ($i % 2 == 0){
            echo $i . " ";
        }
    }
}
?>
</body>
</html>