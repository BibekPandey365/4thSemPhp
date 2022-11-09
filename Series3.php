<!╌ Series: 1, 1, 2, 3, 5, 8, 13, upto 10th term ╌>

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
        $a = 0;
        $b = 1;
        $c = 1;

        for($i=0; $i<10; $i++)
        {
            echo "$c ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    ?>
</body>
</html>