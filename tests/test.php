<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Paginator\Paginator;

$paginator = new Paginator(10);

echo $paginator->total_items;