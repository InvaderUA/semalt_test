<?php

$a = [1,2,3,4,5];
$b = "Hello World";

list($a,$b)=[$b,$a];
print_r("a = ".$a."\n"."b = ");
print_r($b);
?>