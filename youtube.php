<?php


//Youtube metadata

function get_youtube($url){

 $youtube = "http://www.youtube.com/oembed?url=". $url ."&format=json";

 $curl = curl_init($youtube);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 $return = curl_exec($curl);
 curl_close($curl);
 return json_decode($return, true);

 }

$url = $_GET['url'];

// Display Data 
print_r(get_youtube($url));





//Get All metadata

// require_once('metadata.class.php');

// $metaData = MetaData::fetch('https://www.youtube.com/watch?v=-i0qKReU9AM');

// //return a fucking array 
// var_dump($metaData->tags());

// foreach ($metaData as $key => $value) {
// 	echo "$key => $value";
// }

?>

