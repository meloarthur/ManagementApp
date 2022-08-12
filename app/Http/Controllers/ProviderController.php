<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(int $p) {
        $providers = [
            0 => [
                'name'   => 'Provider 1',
                'status' => 'N',
                'cnpj'   => '00.000.000/000-00',
                'ddd'    => '62',
                'phone'  => '99396-1008'
            ],
            1 => [
                'name'   => 'Provider 2',
                'status' => 'S',
                'cnpj'   => NULL,
                'ddd'    => '11',
                'phone'  => '94002-8922'
            ],
            2 => [
                'name'   => 'Provider 3',
                'status' => 'S',
                'cnpj'   => NULL,
                'ddd'    => '85',
                'phone'  => '99669-9669'
            ]
        ];

        echo isset($providers[$p]['cnpj']) ? 'CNPJ informado' :  'CNPJ não informado';

        return view('app.provider.index', compact('providers'), with(['p' => $p]));
    }
}
