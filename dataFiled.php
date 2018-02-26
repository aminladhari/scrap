<?php
class DataFiled{
private $url;

public function setUrl($url){

	$this->url= $url;
}


public function getYoutubeData(){
 return $this->url;
}


public function getDailymotionData(){
 return $this->url;
}



}
