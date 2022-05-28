<?php

require_once __DIR__.'/../vendor/autoload.php';

use Main\Library;

$word = 'drakula';

$library = new Library();

echo $library->add(32.1, 35.76);
echo $library->reverseString($word);
echo $library->createPassword($word);
