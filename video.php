<?php
require_once 'class/Db.php';
require_once 'class/YoutubeApi.php';
$request = new YoutubeApi();
$videos = $request->getVideos();
echo '<pre>';
print_r($videos);
echo '</pre>';
?>