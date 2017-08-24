<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>numbers</title>
</head>
<body>
<ul>
    <?php
    for($i=1; $i <= 20; $i++){
        if ($i % 2 == 1){
            echo "<li><span style='color:blue'>$i</span></li>\n";
        }
        else{
            echo "<li><span style='color:green'>$i</span></li>\n";
        }
    }
    ?>
</ul>

</body>
</html>