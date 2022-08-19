<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index() {
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
                'status' => 'Y',
                'cnpj'   => NULL,
                'ddd'    => '11',
                'phone'  => '94002-8922'
            ],
            2 => [
                'name'   => 'Provider 3',
                'status' => 'Y',
                'cnpj'   => NULL,
                'ddd'    => '85',
                'phone'  => '99669-9669'
            ],
            3 => [
                'name'   => 'Provider 4',
                'status' => 'N',
                'cnpj'   => "12.345.678/910-11",
                'ddd'    => '64',
                'phone'  => '99964-3861'
            ]
        ];

        return view('app.provider.index', compact('providers'));
    }
}
