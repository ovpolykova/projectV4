<?php
$handle = fopen('file1.txt', 'r');
while (!feof ($handle))
{
$stroka = fgets($handle,4096);
echo "<br>";
print $stroka;
}
fclose($handle);
?>