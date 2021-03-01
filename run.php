<?php

use App\App;
use App\Output\Console;
use App\Validate\Five;
use App\Validate\Three;
use App\Validate\ThreeFive;

require_once 'vendor\autoload.php';

$rules = [
    new ThreeFive(),
    new Three(),
    new Five(),
];

$app = new App($rules);
$app->make(1, 100);

$print = new Console();
$print->print($app->getList());
