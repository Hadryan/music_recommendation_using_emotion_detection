<?php

$filepointer=fopen("data.txt","r");
// echo fread($filepointer,filesize("data.txt"));

$content=fread($filepointer,filesize("data.txt"));
// echo $content;
fclose($filepointer);
// close the filepointer

$ar=explode("=",$content);
echo $ar[1];

?>