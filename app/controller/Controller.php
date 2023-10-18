<?php
declare(strict_types=1);

namespace App\Controller;

use Rakit\Validation\Validator;

class Controller{
    public Validator $validator;
    public function __construct()
    {
        $this->validator = new Validator;
    }
}