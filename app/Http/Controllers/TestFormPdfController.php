<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestFormPdfController extends Controller
{
    const MAQUIAGEM = 1;
    const LIMPEZA_DE_PELE = 2;
    const CORTE_CABELO = 3;

    public function index()
    {
        return view('pages/test.form-pdf', ['data' => $this->getData()]);
    }

    public function getData()
    {
        $servicos =
            [
                ['id' => self::MAQUIAGEM, 'nome' => 'Maquiagem'],
                ['id' => self::LIMPEZA_DE_PELE, 'nome' => 'Limpeza de Pele'],
                ['id' => self::CORTE_CABELO, 'nome' => 'Corte de Cabelo']
            ];

        $data[] = [
            'name' => 'Eduarda Iomes',
            'servicos' => $servicos,
            'data_atual' => date('dd/MM/yyyy')
        ];

        // return response()->json($data);
        return $data;
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
