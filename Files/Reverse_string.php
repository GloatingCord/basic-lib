<?php

namespace Files;

use Main\Reverse;

require_once 'vendor/autoload.php';

$word = 'drakula';

$reverse = new Reverse;

echo $reverse->mb_strrev($word).PHP_EOL;
