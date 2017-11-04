<?php
use Phpml\Clustering\KMeans;

require __DIR__ . '/../vendor/autoload.php';

$samples = [[1, 1], [8, 7], [1, 2], [7, 8], [2, 1], [8, 9]];

$kmeans = new KMeans(2);
$kmeans->cluster($samples);