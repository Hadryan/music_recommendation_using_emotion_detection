<?php

$filepointer=fopen("data.txt","r");
// echo fread($filepointer,filesize("data.txt"));

$content=fread($filepointer,filesize("data.txt"));
// echo $content;
fclose($filepointer);
// close the filepointer

$ar=explode("=",$content);
// echo $ar[1];
$data=$ar[1];

include '_db.php';
$sql="UPDATE `emotion_data` SET `value` = '$data' WHERE `emotion_data`.`con` = 1";
$result=mysqli_query($conn,$sql);

?>