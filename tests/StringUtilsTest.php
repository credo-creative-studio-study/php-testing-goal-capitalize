<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;


Assert::eq(capitalize('hello'), 'Hello');


print_r('Всё ок');
