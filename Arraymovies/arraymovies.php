<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anime</title>
</head>
<body>
<?php

$dir = 'anime';
$files = scandir($dir);

//pre_r($files);

function pre_r($array) {
	echo '<prev>';
	print_r($array);
	echo '</pre>';
}

$files = array_diff($files, array('..', '.'));

//pre_r($files);

$files = array_values($files);

//pre_r($files);

$anime = array();

for ($i = 0; $i < count($files); $i++) {

	preg_match("!(.*?)\((.*?)\)!",$files[$i],$results);
	$anime_name = str_replace('_', ' ', $results[1]);
	$anime_name = ucwords($anime_name);

	$anime[$anime_name]['image'] = $files[$i];
	$anime[$anime_name]['year'] = $results[2]; 

}

echo "<table id = 'anime' cellpadding = 50>";
echo "<tr class = 'odd'>";

foreach ($anime as $anime_name => $info) {
	$content = "<td><span class = 'name'>$anime_name</span><br />"
		. "<img src = 'anime/$info[image]'><br />"
		. "<span class = 'year'>( $info[year] )</span></td>";
	echo $content;
}

echo "</tr></table>";
?>

<style>
	#anime {
		background-color: #000;
		color: #fff;
		font: 11pt Calibri;
	}
	tr.header {
		background-color: #111f4e;
		color: #fff;
		font: bold 11pt Calibri
	}
	tr.odd {
		background-color: #18182b;
	}
	tr.even {
		background-color: #141423;
	}
	img {
		padding: 10px;	
	}
	td {
		text-align: center;
	}
	span.year {
		color: #ccc;
		font-size: 22px;
		font-weight: bold;
	}
	span.name {
		font-size: 24px;
		font-weight: bold;
	}
	body {
		margin: 0;
		padding: 0
	}
</style>
</body>
</html>