<?php
echo"No of Visitor is:";
$handler=fopen("file.txt","r");
$hit=(int)fread($handler,20);
fclose($handler);
$hit++;
$handler=fopen("file.txt","w");
fwrite($handler,$hit);
fclose($handler);
echo $hit;
?>