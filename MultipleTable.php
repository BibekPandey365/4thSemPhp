<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 2;
        echo "-- Multiplication Table of $a --<br>";
        
        for($i=1; $i<=10; $i++)
        {
            echo "$a * $i = ".$a*$i."<br>";
        }
    ?>
</body>
</html>