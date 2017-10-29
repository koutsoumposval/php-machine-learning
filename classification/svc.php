<?php
require __DIR__ . '/../vendor/autoload.php';

use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2], [1, 4]];
$labels = ['a', 'b', 'a', 'b', 'b', 'b', 'b'];

$classifier = new SVC(Kernel::LINEAR, $cost = 1000);
$classifier->train($samples, $labels);

$res = $classifier->predict([3, 2]);
$res = $classifier->predict([[3, 2], [1, 5]]);