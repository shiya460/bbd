<?php

$n=100;
for($i=2;$i<=$n;$i++)
{
	$count=0;
	for($j=2;$j<=$i/2;$j++)
{	
if($i%$j==0)
  {
     $count++;
  }
}	
    if($count==0)
     {
	 echo $i;
     }
}
  echo "</br>";

?>