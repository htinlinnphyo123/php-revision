<?php

// callable and closure
require './helpers.php';
$numbers = [1,3,4,5];
function sum(callable $callback,array $numbers) : int|float
{
	return $callback(array_sum($numbers));
}
echo sum('foo',$numbers);

$array = [1,2,4,5];
function foo(int $value): float|int
{
	return $value * 2;
};

$array2 = array_map('foo',$array);


printPrettyArray($array);
printPrettyArray($array2);