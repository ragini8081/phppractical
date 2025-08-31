<?php
echo "For Loop<br>";
for($i=1; $i<=20; $i++)
{
    echo $i . " ";
}
?>

<br>

<?php
echo "While Loop<br>";
$i=1;
while($i<=20)
{
    echo $i . " ";
    $i++;
}
?>

<br>

<?php
echo "Do While Loop<br>";
$i=1;
do
{
   echo $i . " ";
   $i++;
}
while($i<=20);
?>