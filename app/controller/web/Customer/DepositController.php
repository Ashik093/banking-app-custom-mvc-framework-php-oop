<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;
use App\Services\Customer\DepositService;


class DepositController {
    private DepositService $depositService;
    public function __construct()
    {
        $this->depositService = new DepositService();
    }

    public function index()
    {
        return view('customer/deposit');
    }

}