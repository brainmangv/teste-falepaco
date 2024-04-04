<?php

namespace App\Livewire;

use NumberFormatter;
use Livewire\Component;
use Whoops\Exception\Formatter;

class CurrencyExchangeConverter extends Component
{
    public  float $fromValue;
    public  string $fromCurrency;
    public  string $toCurrency;
    public string $currFromTxt = '1,34 US Dollar =';
    public string $currToTxt = '6,75 Brazilian Real';
    public string $lastUpdate;

    public function updated($propertyName)
    {
        if ($propertyName == 'fromCurrency') {
            $num = NumberFormatter::create('pt_BR', NumberFormatter::DECIMAL);
            $this->fromValue = $num->parse($this->fromCurrency);
        }
    }
    public function render()
    {
        return view('livewire.currency-exchange-converter');
    }
}
