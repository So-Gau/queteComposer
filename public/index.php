<?php

require __DIR__ . '/../vendor/autoload.php';
use App\wcs\Hello;

$test = new Hello();

echo $test->talk();