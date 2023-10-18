<?php
declare(strict_types=1);
namespace App\Storage\Db;

class Migration{
    private Connection $connection;
    private $mrigationDirectory = __DIR__.'./migrations/';
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    
    public function run()
    {
        foreach (glob($this->mrigationDirectory."*.*") as $file) {
            if(is_file($file)){
                $sql = file_get_contents($file);
                $this->connection->createTable($sql);
            }
        }
    }
}