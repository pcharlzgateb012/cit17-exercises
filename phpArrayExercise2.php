<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Selection from Ten Largest Cities</title>

</head> 
<body>

<h2>Large Cities<br /></h2>
 
<?php
$cities=array(
  "Tokyo",
  "Mexico City",
  "New York City",
  "Mumbai",
  "Seoul",
  "Shanghai",
  "Lagos",
  "Buenos Aires",
  "Cairo",
  "London" 
  );
 
foreach($cities as $c){
  echo "$c, ";
}
 
sort($cities);
 
echo "\n<ul>\n" ;
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>" ;
 
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;
 
sort($cities);
echo "\n<ul>\n";
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>";
?>
 
</body>
</html>

