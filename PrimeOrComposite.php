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

        $num = 8;
        $flag = 0;

        for($i=2; $i<$num; $i++)
        {
            if($num%$i == 0)
            {
                $flag = 1;
            }
        }

        if($flag == 0)
        {
            echo "$num is Prime";
        }
        else
        {
            echo "$num is Composite";
        }

    ?>
</body>
</html>