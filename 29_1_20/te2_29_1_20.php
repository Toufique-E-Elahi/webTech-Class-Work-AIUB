<?php
$a=10;
$c=51;

echo " My variable= ".$a;
echo "<br>". $a;
echo "<br>";
$b=$c+$a;

echo "Addition=".$b;
echo "<br>";
//echo "<br>";
echo "/////";
echo "<br>";

/*for($x=1;$x<=5;$x++)
{
	echo "*";
	echo "<br>";
}
*/
for($x=1;$x<=5;$x++)
{
	for($y=1;$y<=$x;$y++)
	{
		echo "*";
	}
	echo "<br>";
}
function Add($a,$b)
{
	echo "Addition= ".($a+$b);
}
Add(5,7);
echo "<br>";

function Add1($a,$b)
{
	$c=$a+$b;
	return $c;
}

echo "Addition= ".Add1(15,35);
echo "<br>";
echo Add1(15,5);
echo "<br>";
$ar=array ("a","b","c","d","e","f","g","h","i","j");
for($x=0;$x<10;$x+=2)
{
	echo $ar[$x];
	echo "<br>";
}
echo "New";
echo "<br>";
for($x=0;$x<count($ar);$x+=2)
{
	echo $ar[$x];
	echo "<br>";
}


$students =array ("Alice","Bob","Charlie");
echo "2nd array".$students[1];
echo "<br>size of array=".count($students);echo "<br>";
$Associative= array ("omuk"=>"30", "karim"=>"40", "rahim"=>"42");
echo $Associative['omuk'];
echo"<br>";
foreach($Associative as $a=>$b)
{
	echo "Key= " . $a . ", Value= ".$b."<br>";
	
}

?>