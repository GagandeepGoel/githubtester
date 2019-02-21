<?php
$m= array("Sofia"=>"31", "Raman"=>"37", "William"=>"39","Ramesh"=>"40");
asort($m);
echo "Ascending order by values";
foreach($x as $m)
{
print_r($m);
}
arsort($m);
echo "Descending order by values";
foreach($y as $m)
{
print_r($m);
}
ksort($m);
echo "Ascending order by keys";
foreach($z as $m)
{
print_r($m);
}
krsort($m);
echo "Descending order by keys";
foreach($a as $m)
{
print_r($m);
}
?>