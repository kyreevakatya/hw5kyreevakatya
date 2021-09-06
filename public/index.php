<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$v = new \Currency\Currency('USD');
$g = new \Currency\Currency('UAH');
$h = $v->equals($g);


$b = new \Money\Money(1.5, new \Currency\Currency('USD'));
$c = new \Money\Money(15, new \Currency\Currency('USD'));

$d = $b->add($c);


var_dump($d);

