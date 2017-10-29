<?php
use Phpml\Classification\NaiveBayes;

require __DIR__ . '/../vendor/autoload.php';

$samples = [[5, 1, 1], [1, 5, 1], [1, 1, 5]];
$labels = ['a', 'b', 'c'];

$classifier = new NaiveBayes();
$classifier->train($samples, $labels);

$res = $classifier->predict([3, 1, 1]);
$res = $classifier->predict([[3, 1, 1], [1, 4, 1]]);