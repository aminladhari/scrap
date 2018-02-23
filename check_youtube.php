<?php
public function determineVideoUrlType($url) {


    $yt_rx = '/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/';
    $has_match_youtube = preg_match($yt_rx, $url, $yt_matches);


    $vm_rx = '/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([‌​0-9]{6,11})[?]?.*/';
    $has_match_vimeo = preg_match($vm_rx, $url, $vm_matches);


    //Then we want the video id which is:
    if($has_match_youtube) {
        $video_id = $yt_matches[5]; 
        $type = 'youtube';
    }
    elseif($has_match_vimeo) {
        $video_id = $vm_matches[5];
        $type = 'vimeo';
    }
    else {
        $video_id = 0;
        $type = 'none';
    }


    $data['video_id'] = $video_id;
    $data['video_type'] = $type;

    return $data;

}
?>