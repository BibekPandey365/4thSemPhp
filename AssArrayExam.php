<?php


echo "<br><b><u>2019 Make up:</u></b><br>";

$details = array("Ram Thapa" => "M", "Aruna Thapa" => "F");
echo "<table border = 2>";
echo "<tr><th>Roll No</th><th>Name</th><th>Gender</th></tr>";
$var=1;
foreach($details as $i => $j)
{
    echo "<tr><td>".$var."</td><td>".$i."</td><td>".$j."</td></tr>";
    $var++;
}
echo "</table>";




echo "<br><b><u>2018:</u></b><br>";

$details = array("BIM", "BBA", "BBS");
echo "<ol type = a>";
foreach($details as $a)
{
    echo "<li>".$a."</li>";
}
echo "</ol>";




echo "<br><b><u>2017:</u></b><br>";

$details = array(1 => array("1", "Aalu", "Veg", "Local", "10x8 cm"),
     2 => array("2", "Aanda", "Poultry", "Bikashay", "6x4 cm"));

echo "<table border = 2>";
echo "<tr><th>Id</th><th>Product Name</th><th>Catagory</th><th>Brand</th><th>Size</th></tr>";

for($i=1; $i<=count($details); $i++)
{
    echo "<tr>";
    for($k=0; $k<count($details[$i]); $k++)
    {
        echo "<td>".$details[$i][$k]."</td>";
    }
    echo "</tr>";
}

echo "</table>";




echo "<br><b><u>2016:</u></b><br>";

$cities = array("Kathmandu" => array("New Road", "Durbar MArg", "Thamel"),
    "Lalitpur" => array("Patan", "Jawlakhel", "Kupondole"),
    "Bhaktapur" => array("Surya Binayak", "Durbar Square"));

foreach($cities as $i => $j)
{
    echo "<u>Cities of ".$i." :</u><br>";
    foreach($j as $v)
    {
        echo "&nbsp".$v."<br>";
    }
}




echo "<br><b><u>2015:</u></b><br>";

$details = array(1 => array("R", "21", "M"), 2 => array("A", "20", "F"));

echo "<table border = 2>";
echo "<tr><th>Name</th><th>Age</th><th>Gender</th></tr>";

for($i=1; $i<=count($details); $i++)
{
    echo "<tr>";
    for($k=0; $k<count($details[$i]); $k++)
    {
        echo "<td>".$details[$i][$k]."</td>";
    }
    echo "</tr>";
}
echo "</table>";


?>