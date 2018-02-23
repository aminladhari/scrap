<?php
header('Content-Type: application/json');

function get_page_info($url)
{
        $urlInfo=array();
        $str = file_get_contents($url);
        $tags = get_meta_tags($url);

                if(strlen($str)>0)
                {
                        $str = trim(preg_replace('/\s+/', ' ', $str));
                        preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title);

                        $urlInfo['title']=$title[1];
                        $urlInfo['description']=$tags['description'];
                        $urlInfo['keywords']=$tags['keywords'];
                        $urlInfo['author_url']=$tags['author_url'];


                        preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $str, $image);

                                if(count($image)>1)

                                        $urlInfo['logo']=$image[1];
                                else
                                        $urlInfo['logo']=null;

                                return $urlInfo;
                }
}

        if(isset($_POST['getInfoFor']))
        {
                $siteInfo = get_page_info($_POST['getInfoFor']);
                print_r(json_encode($siteInfo));
        }
        else
        {
                echo "Request Method Not Allowed!";
        }


?>