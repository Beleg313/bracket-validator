<?php

namespace App\Engine;

function makeArrayOfBrackets(string $string)
{
  $array = str_split($string);

  $result = [];

  $bracketsExample = ['(', ')'];

  foreach ($array as $item) {
    if (in_array($item, $bracketsExample)) {
      $result[] = $item;
    }
  }
  return $result;
}

function bracketsValidator(string $mathExpression) 
{

if (strlen($mathExpression) === 0) {
  return 'Brackets ok!';
}

$bracketsArray = makeArrayOfBrackets($mathExpression);

$pair = '()';

$stack = [];

foreach ($bracketsArray as $item) {

  if($item === '(') {
    array_push($stack, $item);
  }

  else if($item === ')') {
  $temp = array_pop($stack);
  $pairs = "{$temp}{$item}";
    if($pairs !== $pair) {
      return 'Brackets mistake!';
    }
   }
  }

  if (empty($stack)) {
    return 'Brackets ok!';
  } else {
    return 'Brackets mistake!';
  }

}
