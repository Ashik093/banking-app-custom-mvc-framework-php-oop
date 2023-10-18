<?php

use App\Storage\Db\Migration;
use App\Storage\Db\Connection;


require_once __DIR__.'./vendor/autoload.php';

$migration = new Migration((new Connection()));
$migration->run();