<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OddEven</title>
</head>
<body>
<?php
$arr = array(25, 47, 42, 56, 32);
$oddArray = array(file_get_contents("OddEven.txt"));
$evenArray = array(file_get_contents("OddEven.txt"));
echo "The five elements in the array are: \n";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "<br>". "The Even Elements are : "."<br>";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "<br>". "The Odd Elements are  : "."<br>";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>
</body>
</html>