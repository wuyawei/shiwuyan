<?php

$str=file_get_contents('demo.html');
$preg='/\{lo\s+(\$\w+)\s+(\$\w+)\}([^\{]+)\{(\$\w+)\}([^\{]+)\{\/lo\}/';
preg_match($preg,$str,$arr);
//var_dump($arr);

$result="<?php
  \$data=array(1,2,3,4,5);
  foreach({$arr[1]} as {$arr[2]}){
       echo \"{$arr[3]}{$arr[4]}{$arr[5]}\";
  }
?>";
file_put_contents("mo.php",preg_replace($preg,$result,$str));
include_once "mo.php";
