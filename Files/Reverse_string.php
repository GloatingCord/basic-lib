<?php

namespace Files;

use Main\Reverse;

require_once 'vendor/autoload.php';

$word = 'drakula';

$reverse = new Reverse($word);

echo $reverse->mb_strrev($word).PHP_EOL;
