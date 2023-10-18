<?php
declare(strict_types=1);

namespace App\Controller\Web\Admin;

class AuthController{
    public function __construct()
    {

    }

    public function showLoginForm()
    {
        return view('admin/login');
    }
    
}