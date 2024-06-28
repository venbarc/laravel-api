<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter{

    protected $safeParms = [
        'CustomerId' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billDate' => ['eq'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];
    protected $columnMap = [
        'CustomerId' => 'customer_id',
        'billDate' => 'bill_date',
        'paidDate' => 'paid_date',

    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'gte' => '>=',
        'lte' => '<=',
        'ne' => '!='
    ];
}
