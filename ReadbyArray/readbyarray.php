<?php
$file = fopen("test.txt","r");

while(!feof($file))
  {
	  $line[]=fgets($file);

  }
  if(rtrim($line[0])=="user001")
  {
	  echo "match";
  }
  else
  {
	  echo "not match";
  }
 
fclose($file);
?>