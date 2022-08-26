<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome'   => 'Fornecedor 1',
                'status' => 'N',
                'cnpj'   => '00.000.000/000-00',
                'ddd'    => '62',
                'fone'   => '99396-1008'
            ],
            1 => [
                'nome'   => 'Fornecedor 2',
                'status' => 'Y',
                'cnpj'   => NULL,
                'ddd'    => '11',
                'fone'   => '94002-8922'
            ],
            2 => [
                'nome'   => 'Fornecedor 3',
                'status' => 'Y',
                'cnpj'   => NULL,
                'ddd'    => '85',
                'fone'   => '99669-9669'
            ],
            3 => [
                'nome'   => 'Fornecedor 4',
                'status' => 'N',
                'cnpj'   => "12.345.678/910-11",
                'ddd'    => '64',
                'fone'   => '99964-3861'
            ]
        ];

        return view('app.fornecedores.fornecedor', compact('fornecedores'));
    }
}
