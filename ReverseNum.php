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

    $num = 12345;
    $rem = 0;
    $rev = 0;

    while($num > 1)
    {
        $rem = $num % 10;
        $rev = $rev*10 + $rem;
        $num /= 10;
    }
    echo "$rev<br>";

    ?>
</body>
</html>