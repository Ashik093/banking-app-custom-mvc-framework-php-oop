<?php
declare(strict_types=1);
namespace App\Interface;

interface StorageInterface{
    public function store():mixed;
    public function get():mixed;
    public function where():mixed;
}