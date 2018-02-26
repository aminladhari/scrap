<?php
// require"dataFiled.php";

// $datafiled=new DataFiled();
// $datafiled->setUrl($_POST['link']);
// //var_dump("tst". $datafiled->getYoutubeData());

$url=$_POST['link'];

if (preg_match ("/\b(?:youtube)\.com\b/i", $url)) 
{
   $x=file_get_contents("http://www.youtube.com/oembed?url=".$_POST['link']);

$if=json_decode($x)->html;
$author =json_decode($x)->author_name;
$provider=json_decode($x)->provider_url;
$title=json_decode($x)->title;
$description=json_decode($x)->description;

$data=array('if' =>$if ,'author'=>$author,'provider'=>$provider,'title'=>$title ,'description'=>$description);


print_r($data);

}

elseif (preg_match ("/\b(?:dailymotion)\.com\b/i", $url)) 
{

$x=file_get_contents("http://www.dailymotion.com/services/oembed?url=".$_POST['link']);



$if=json_decode($x)->html;
$type=json_decode($x)->type;
$provider=json_decode($x)->provider_url;
$title=json_decode($x)->title;
$description=json_decode($x)->description;


$data=array('if' =>$if ,'author'=>$author,'provider'=>$provider,'title'=>$title ,'description'=>$description);


print_r($data);

	
}





?>



