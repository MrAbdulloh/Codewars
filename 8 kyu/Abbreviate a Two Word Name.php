<?php
function abbrevName($name)
{
  $names = explode(" ", strtoupper($name));
  return $names[0][0]."." .$names[1][0];
}

$name = 'Sam Harris';
var_dump( abbrevName($name));