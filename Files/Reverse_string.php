<?php

namespace Files;

use Main\StringFuncs;

require_once 'vendor/autoload.php';

$word = 'drakula';

$string_functions = new StringFuncs;

echo $string_functions->create_secure_password($word).PHP_EOL;

echo $string_functions->mb_strrev($word).PHP_EOL;
