<?php

namespace App\Services;

use GuzzleHttp\Client;

class ExchangeRateService
{
    protected $client;
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('EXCHANGERATES_API_URL');
        $this->apiKey = env('EXCHANGERATES_API_KEY'); // Insira sua chave de API aqui
    }

    public function getExchangeRate($from, $to, $amount)
    {
        $response = $this->client->request('GET', $this->baseUrl . '/convert', [
            'query' => [
                'from' => $from,
                'to' => $to,
                'amount' => $amount,
                'access_key' => $this->apiKey,
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        if ($data['success']) {
            return $data;
        } else {
            return [
                'success' => false,
                'message' => 'Erro ao obter taxa de câmbio'
            ];
        }
    }
}
