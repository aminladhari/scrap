<?php 

	$a = get_meta_tags('https://www.youtube.com/watch?v=YXeqIAEoyyY');
	
	//var_dump($a);

	
	echo "<br>";

	echo "titre : "; print_r ($a["title"]);
	echo "<br><br>";
	echo "description : "; print_r($a["description"]);
	echo "<br><br>";
	echo "URL : "; print_r($a["twitter:url"]);
	echo "<br><br>";
	echo "<img src='".$a["twitter:image"]."'> ";

?>