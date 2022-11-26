<?php

echo "<b><u>3 x 3 Matrix</u></b><br>";

$matrix = array (
    array(1, 11, 32),
    array(22, 15, 10),
    array(4, 7, 90)
);


echo "<br><br>Diagonal Elements:<br>";
for($i=0; $i<3; $i++)
{
    for($j=0; $j<3; $j++)
    {
        if($i==$j)
        {
            echo $matrix[$i][$j]."&nbsp";
        }
    }
}


echo "<br><br>Odd elements:<br>";
for($i=0; $i<3; $i++)
{
    for($j=0; $j<3; $j++)
    {
        if($matrix[$i][$j] % 2 != 0)
        {
            echo $matrix[$i][$j]."&nbsp";
        }
    }
}


echo "<br><br>Check if 15 is present:<br>";
$flag = 0;
for($i=0; $i<3; $i++)
{
    for($j=0; $j<3; $j++)
    {
        if($matrix[$i][$j] == 15)
        {
            $flag = 1;
        }
    }
}
if($flag == 0)
{
    echo "Not Present";
}
else
{
    echo "Present";
}


echo "<br><br>Count numbers divisiable by 10:<br>";
$count = 0;
for($i=0; $i<3; $i++)
{
    for($j=0; $j<3; $j++)
    {
        if($matrix[$i][$j]%10 == 0)
        {
            $count++;
        }
    }
}
echo $count;

?>