<?php
declare(strict_types=1);

namespace App\Controller\Web\Admin;

class TransactionController{
    public function __construct()
    {

    }

    public function index()
    {
        return view('admin/customer/transaction');
    }
    
}