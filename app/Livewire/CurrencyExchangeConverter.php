<?php

namespace App\Livewire;

use App\Models\Conversion;
use NumberFormatter;
use Livewire\Component;
use App\Services\ExchangeRateService;

class CurrencyExchangeConverter extends Component
{
    public  string $fromCurrencyAmount ='';
    public  string $toCurrencyAmount ='';
    
    public string $fromCurrencyCode ="BRL";
    public string $toCurrencyCode ="USD";
    
    public  string $currFromTxt = '';
    public  string $currToTxt = '';
    public  string $lastUpdate;
    public string $debug;
    protected ExchangeRateService $service;
    private array $currencies=['BRL'=>'Brazilian Real', 'USD'=>'US Dollar', 'CAD'=>'Canadian Dollar'];
    public function boot(ExchangeRateService $service)
    {
        $this->service = $service;
    }

    public function updated()
    {
        if ($this->fromCurrencyCode != $this->toCurrencyCode && $this->fromCurrencyAmount != '') {
            $num = NumberFormatter::create('pt_BR', NumberFormatter::DECIMAL);
            $fromValue = $num->parse($this->fromCurrencyAmount);
            $result=$this->service->getExchangeRate($this->fromCurrencyCode, $this->toCurrencyCode, $fromValue);
           
            if ($result['success']) {
                $this->toCurrencyAmount=$num->format($result['result']);
                $this->currFromTxt=$this->fromCurrencyAmount.' '.$this->currencies[$this->fromCurrencyCode].' =';
                $this->currToTxt=$this->toCurrencyAmount.' '.$this->currencies[$this->toCurrencyCode];
                $this->addConversionHistoric($fromValue,$result['info']['rate']);
                $this->lastUpdate=now()->toDateTimeString();
            }
        }
    }
    public function swapCurrencies(){

        $from=$this->fromCurrencyCode;
        $to=$this->toCurrencyCode;
        $this->fromCurrencyCode=$to;
        $this->toCurrencyCode=$from;
        $this->updated();
    }
    private function addConversionHistoric($fromValue,$rate){
        Conversion::create([
            'from' => $this->fromCurrencyCode,
            'to' => $this->toCurrencyCode,
            'amount' => $fromValue,
            'rate' => $rate
        ]);
        $this->dispatch('currency-exchange-table:refresh');
    }
    public function render()
    {
        return view('livewire.currency-exchange-converter');
    }
}
