<?php
require __DIR__ . '/../vendor/autoload.php';

use Phpml\Association\Apriori;

$samples = [['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta'], ['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta']];
$labels  = [];

$associator = new Apriori($support = 0.5, $confidence = 0.5);
$associator->train($samples, $labels);

$res = $associator->predict(['alpha','theta']);
$rules = $associator->getRules();
$apriori = $associator->apriori();

$res = $associator->predict([['alpha','epsilon'],['beta','theta']]);
$rules = $associator->getRules();
$apriori = $associator->apriori();