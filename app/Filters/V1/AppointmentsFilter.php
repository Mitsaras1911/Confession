<?php

namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class AppointmentsFilter extends ApiFilter{
    protected $safeParams = [
        'priest_id'=> ['eq'],
        'phone_number'=> ['eq'],
        'status' => ['eq']
    ];
    protected $columnMap =
        [
          'priestID'=>'priest_id',
          'phoneNumber'=>'phone_number',
        ];
    protected $operatorMap = [
        'eq' => '=',
    ];
}
