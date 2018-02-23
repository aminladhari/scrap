
<?php

$x=file_get_contents("http://www.dailymotion.com/services/oembed?url=http://www.dailymotion.com/video/x6f5rq0");

$if=json_decode($x)->html;
$type=json_decode($x)->type;
$provider=json_decode($x)->provider_url;
$title=json_decode($x)->title;
$description=json_decode($x)->description;


echo $if;
echo "<br>";
echo $type;
echo "<br>";
echo $provider;
echo "<br>";
echo $title;
echo "<br>";
echo $description;
// var_dump(json_decode($x)->html);



// provider_name
// title
// description




?>
