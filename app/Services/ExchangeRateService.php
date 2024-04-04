<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ExchangeRateService
{
    protected $client;
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('EXCHANGERATES_API_ENDPOINT');
        $this->apiKey = env('EXCHANGERATES_API_KEY'); // Insira sua chave de API aqui
    }

    public function getExchangeRate($from, $to, $amount)
    {
        try {
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
                    'message' => $data['error']['message']
                ];
            }
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() === 403) {
                $response = json_decode($e->getResponse()->getBody()->getContents());
                $message=$response->error->message;
                return [
                    'success' => false,
                    'message' => $message
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Erro ao fazer solicitação para API de taxa de câmbio'
                ];
            }
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Ocorreu um erro inesperado: ' . $e->getMessage()
            ];
        }
    }
}
