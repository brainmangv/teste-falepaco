<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExchangeRateService;

class ExchangeRateController extends Controller
{
    protected $exchangeRateService;

    public function __construct(ExchangeRateService $exchangeRateService)
    {
        $this->exchangeRateService = $exchangeRateService;
    }

    public function getExchangeRate(Request $request)
    {
        $from = $request->input('from', 'GBP');
        $to = $request->input('to', 'JPY');
        $amount = $request->input('amount', 25);

        $exchangeRate = $this->exchangeRateService->getExchangeRate($from, $to, $amount);

        return response()->json($exchangeRate);
    }
}
