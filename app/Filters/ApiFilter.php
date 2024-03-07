<?php

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter{
    protected $safeParams = [];
    protected $operatorMap = [];

    protected $columnMap = [];

    public function transform(Request $request){
        $eloQuery = [];

        foreach ($this->safeParams as $param => $operators){
            $query = $request->query($param);
            if(!isset($query)) continue;//EXIT THE LOOP

            $column = $this->columnMap[$param] ?? $param;
            foreach ($operators as $operator) {
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator],$query[$operator]];
                }
            }

        }

        return $eloQuery;


    }



}
