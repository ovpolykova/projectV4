<?php
$tt=$_POST['t1'];
$filename= "file1.txt";
$handle=fopen($filename,'a+');
fwrite($handle,$tt);
fwrite($handle,"<BR>");
?>