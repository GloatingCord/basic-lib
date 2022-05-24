<?php

namespace Files;

use Main\Strings\StringFuncs;
use Main\Numbers\NumberFuncs;

require_once 'vendor/autoload.php';

$word = 'drakula';

$string_functions = new StringFuncs;

$number_functions = new NumberFuncs;

echo $string_functions->create_secure_password($word).PHP_EOL;

echo $string_functions->mb_strrev($word).PHP_EOL;

echo $number_functions->add(32.2, 23.2);

