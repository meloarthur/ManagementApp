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
                'cnpj'   => '00.000.000/000-00'
            ],
            1 => [
                'name'   => 'Provider 2',
                'status' => 'S'
            ]
        ];
        return view('app.provider.index', compact('providers'), with(['p' => $p]));
    }
}
