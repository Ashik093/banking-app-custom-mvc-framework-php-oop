<?php

use App\Storage\Mysql\Migration;
use App\Storage\Mysql\Operation;


require_once __DIR__.'./vendor/autoload.php';

$migration = new Migration((new Operation()));
$migration->run();