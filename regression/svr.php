<?php
use Phpml\Regression\SVR;
use Phpml\SupportVectorMachine\Kernel;

require __DIR__ . '/../vendor/autoload.php';

$samples = [[60], [61], [62], [63], [65]];
$targets = [3.1, 3.6, 3.8, 4, 4.1];

$regression = new SVR(Kernel::LINEAR);
$regression->train($samples, $targets);
echo $regression->predict([64]);