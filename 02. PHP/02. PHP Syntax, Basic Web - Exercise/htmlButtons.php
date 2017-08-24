<!DOCTYPE html>
<head>
    <title>HTML Buttons</title>
</head>
<body>

<form>
    Count: <input type="text" name="count" />
    <input type="submit" />
</form>
<form>
    <?php
    if (isset($_GET["count"])){
        $count = intval($_GET["count"]);
        for ($i = 1; $i <= $count; $i++){
            echo "<div><button>$i</button></div>" . PHP_EOL;
        }
    }
    ?>
</form>
</body>
</html>