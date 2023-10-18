<?php
namespace App\Models;
use App\Enum\EntryType;
use App\Enum\TransactionType;


class TransactionModel {

    public float $amount;
    public string $email;
    public string $date;
    public TransactionType $transactionType;
    public EntryType $entryType;
    public string $transferedBy;
    public string $transferedTo;
    public static function getModelName():string
    {
        return 'transactions';
    }
}