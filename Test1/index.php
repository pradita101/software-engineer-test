<?php
function find($text,$openpos)
{
  $closepos=$openpos;
  $counter=1;
  while($counter>0)
  {
    $c=$text[++$closepos];
    if($c=='(')
    {
      $counter++;
    }
    else if($c==')')
    {
      $counter--;
    }
  }
  return $closepos;
}
$c=find("a (b c (d e (f) g) h) i (j k)",2);
echo $c;
?>