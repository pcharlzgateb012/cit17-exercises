<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>frequency</title>
</head>
<body>
<?php

$a = array (25,12,43);

$fr = array_fill(0, count($a), 0);
$check = -1;
for($i = 0; $i < count($a); $i++)
{
$count = 1;
for($j = $i+1; $j < count($a); $j++)
{
if($a[$i] == $a[$j]) 
{
$count++;

$fr[$j] = $check;
}
}
if($fr[$i] != $check) 
$fr[$i] =$count;
}
echo("The Array Elements are: ". "<br>");
foreach( $a as $b )
{
echo $b."  ";
}

echo ( "<br>". " frequency of given array elements: ". "<br>" );
for( $i = 0; $i < count($fr); $i++)
{
if($fr[$i] != $check)
{
echo( $a[$i] ." occurs " );
echo( $fr[$i]." times.". "<br>");
echo(" ");
}
}
return 0;
?>
</body>
</html>