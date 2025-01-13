<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScanQr extends Controller
{
    public function __invoke($code)
    {
        $array = ['RP1G6P', "857683F4Q6"];

        if(in_array($code, $array)){
            return [
                'match' => true,
                'data' => [
                    'name' => 'Vahn'
                ]
            ];
        }

        return [
            'match' => false
        ];
    }
}
