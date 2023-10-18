<?php
declare(strict_types=1);
namespace App\Storage\Mysql;
use PDO;
use App\Interface\StorageInterface;

class Operation implements StorageInterface{
    protected PDO $db;
    public function __construct()
    {
        $config = require_once __DIR__.'./../../../config/database.php';
        try {
            $this->db = new PDO("mysql:dbname={$config['dbname']};host={$config['dbhost']}",$config['dbuser'],$config['dbpassword']);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function createTable(string $sql)
    {
        try {
            $this->db->exec($sql);
            echo "Table created".PHP_EOL;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function store():mixed{

    }
    public function get():mixed
    {

    }
    public function where():mixed
    {
        
    }
}