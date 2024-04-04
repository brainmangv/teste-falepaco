<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Conversion;
use Livewire\Component;

class CurrencyExchangeTable extends Component
{
    use WithPagination;

    protected $listeners = ['currency-exchange-table:refresh' => 'refresh'];
    public function render()
    {
        return view('livewire.currency-exchange-table', ['conversions' => Conversion::paginate(10)]);
    }
}
