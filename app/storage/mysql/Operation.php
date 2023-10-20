<?php
declare(strict_types=1);
namespace App\Storage\Mysql;
use PDO;
use App\Config;
use App\Interface\StorageInterface;

class Operation implements StorageInterface{
    protected PDO $db;
    public function __construct()
    {
       
        try {
            $dbname = Config::get('dbname');
            $dbhost = Config::get('dbhost');
            $dbuser = Config::get('dbuser');
            $dbpassword = Config::get('dbpassword');
            $dsn = "mysql:host=$dbhost;dbname=$dbname";
            
            $this->db = new PDO($dsn,$dbuser,$dbpassword);
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