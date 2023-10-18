<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;
use App\Services\Customer\WithdrawService;



class WithdrawController {
    private WithdrawService $withdrawService;
    public function __construct()
    {
        $this->withdrawService = new WithdrawService();
    }

    public function index()
    {
        return view('customer/withdraw');
    }

}