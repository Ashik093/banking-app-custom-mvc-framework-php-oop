<?php

use App\Controller\Web\Admin\AuthController;
use App\Controller\Web\Admin\CustomerController;
use App\Controller\Web\Admin\TransactionController;
use App\Controller\Web\Customer\HomeController;
use App\Controller\Web\Customer\DepositController;
use App\Controller\Web\Customer\DashboardController;
use App\Controller\Web\Customer\TransferController;
use App\Controller\Web\Customer\WithdrawController;
use App\Controller\Web\Customer\AuthController as CustomerAuthController;


return [
    "/"=>[HomeController::class,"login"],
    "/register"=>[HomeController::class,"register"],

    "/customer/login"=>[CustomerAuthController::class,'login'],
    "/customer/register"=>[CustomerAuthController::class,'register'],

    "/customer/dashboard"=>[DashboardController::class,"index"],
    "/customer/deposit"=>[DepositController::class,"index"],
    "/customer/withdraw"=>[WithdrawController::class,"index"],
    "/customer/transfer"=>[TransferController::class,"index"],

    "/admin/login"=>[AuthController::class,"showLoginForm"],
    "/admin/customer/list"=>[CustomerController::class,"index"],
    "/admin/customer/transaction"=>[TransactionController::class,"index"],

];