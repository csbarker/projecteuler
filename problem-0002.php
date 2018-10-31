<?php

$current = 2;
$previous = 1;
$sum = 0;

while ($current <= 4000000) {
	if ($current % 2 === 0) $sum += $current;
	$new = ($previous + $current);
	$previous = $current;
	$current = $new;
}

echo $sum;