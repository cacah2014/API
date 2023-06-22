<?php
$file = "https://dog.ceo/api/breeds/image/random";
$content = file_get_contents($file);
$json = json_decode($content);
echo "<img src='$json->message'>" ;
?>