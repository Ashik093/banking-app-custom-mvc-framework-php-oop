<?php
declare(strict_types=1);
namespace App\Storage\Mysql;

use App\Storage\Mysql\Operation;



class Migration{
    private Operation $operation;
    private $mrigationDirectory = __DIR__.'./migrations/';
    public function __construct(Operation $operation)
    {
        $this->operation = $operation;
    }

    
    public function run()
    {
        foreach (glob($this->mrigationDirectory."*.*") as $file) {
            if(is_file($file)){
                $sql = file_get_contents($file);
                $this->operation->createTable($sql);
            }
        }
    }
}