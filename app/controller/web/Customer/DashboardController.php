<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;
use App\Services\Customer\TransactionService;

class DashboardController {
    private TransactionService $transactionService;
    public function __construct()
    {
        $this->transactionService = new TransactionService();
    }

    public function index()
    {
        return view('customer/dashboard');
    }
}