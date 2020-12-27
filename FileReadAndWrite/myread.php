<?php
$myfile = fopen("control/newfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize( "control/newfile.txt" ));
fclose($myfile);
?>