<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Duplicates</title>
</head>
<body>
<?php

$array = array(5, 1, 1);
$vals = array(file_get_contents("Duplicates.txt"));
echo 'No. of Duplicate Items: '.count($vals).'<br><br>';
print_r($vals); 
?>
</body>
</html>

