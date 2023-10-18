<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;

class HomeController{
    public function __construct()
    {

    }

    public function login()
    {
        return view('customer/login');
    }
    public function register()
    {
        return view('customer/register');
    }
}