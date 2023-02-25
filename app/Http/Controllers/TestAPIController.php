<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Http;

class TestAPIController extends Controller
{
    //https://jsonplaceholder.typicode.com/todos/1
    //https://fakerapi.it/api/v1/companies?_quantity=1

    public function getApi()
    {
        dd($this->getFacadeHttp());
        return view('pages/test.api');
    }


    public function getFacadeHttp()
    {
        $response = Http::get('https://fakerapi.it/api/v1/companies?_quantity=2');

        return $response->json();
    }

    public function getCurl()
    {
        // Inicializa a sessão cURL
        $ch = curl_init();

        // Define a URL do endpoint desejado
        $url = "https://fakerapi.it/api/v1/companies?_quantity=2";

        // Define as opções da requisição cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Executa a requisição cURL e armazena a resposta
        $resposta = curl_exec($ch);

        // Verifica se ocorreu algum erro na requisição
        if (curl_errno($ch)) {
            $mensagem = curl_error($ch);
            curl_close($ch);
            throw new Exception("Erro ao obter JSON: {$mensagem}");
        }

        // Finaliza a sessão cURL
        curl_close($ch);

        // Converte o conteúdo JSON para um array associativo
        $dados = json_decode($resposta, true);
    }
}
