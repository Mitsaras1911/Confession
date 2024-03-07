<?php

namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PriestsFilter extends ApiFilter{
    protected $safeParams = [
        'age' => ['let'],//lt
        'rank'=> ['eq'],
        'name' => ['eq'],
        'surname' =>['eq'],

    ];
    protected $columnMap = [];
    protected $operatorMap = [
        'let' => '<=',
        'eq' => '=',
    ];
}
