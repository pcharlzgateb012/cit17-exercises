<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Weather Conditions</title>

</head> 
<body>

<h2>How is our weather for today?</h2>
 
<?php

$weather=array(
  "rain",
  "sunshine",
  "clouds",
  "hail",
  "sleet",
  "snow",
  "wind" 
  );
 
echo "<p>We've seen all kinds of weather this month. At the beginning of the month, ";
echo "we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] ";
echo "and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].</p>";
?>
 
</body>
</html>