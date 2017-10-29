<?php
use Phpml\Classification\KNearestNeighbors;

require __DIR__ . '/../vendor/autoload.php';

$samples = [[1, 3], [1, 4], [1, 5], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b', 'b'];

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

$res = $classifier->predict([3, 2]);
$res = $classifier->predict([[3, 2], [1, 5]]);