<?php



$file=fopen("log.txt","a") or die("Error in opening !!");

fwrite($file,"asdasdasd\n");

fwrite($file,"112121\n");

fwrite($file,"65465465\n");



echo fread($file,10);
?>