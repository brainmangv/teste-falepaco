<?php

namespace App\Livewire;

use App\Models\Conversion;
use Livewire\Component;

class CurrencyExchangeTable extends Component
{
    protected $listeners = ['currency-exchange-table:refresh' => 'refresh'];
    public function render()
    {
        $conversion = Conversion::all();
        return view('livewire.currency-exchange-table', ['conversions' => $conversion]);
    }
}
