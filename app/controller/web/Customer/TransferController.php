<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;
use App\Services\Customer\TransferService;

class TransferController {
    private TransferService $transferService;
    public function __construct()
    {
        $this->transferService = new TransferService();
    }

    public function index()
    {
        return view('customer/transfer');
    }

}